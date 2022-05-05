<?php
declare(strict_types=1);

class YouTube
{
    /**
     * @param string $url
     *
     * @return array<String, array<String, String>>|null
     */
    public function processVideo(string $url): ?array
    {
        $code = $this->getYouTubeCode($url);
        $url = $this->convertUrl($url);
        $url = sprintf('https://www.youtube.com/oembed?url=%s&format=json', $url);
        $content = file_get_contents($url);

        if (!$content) {
            return null;
        }

        $content = json_decode($content, true);

        $result['videos'] = [
            'info' => $content,
        ];

        if ($code) {
            $result['videos']['code'] = $code;
            $result['videos']['embed'] = sprintf('https://www.youtube.com/embed/%s?modestbranding=1&rel=0', $code);
        }

        return $result;
    }

    /**
     * @param string $url
     *
     * @return string|null
     */
    private function getYouTubeCode(string $url): ?string
    {
        $pattern =
            "/^(?:https?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?vi?=|embed\/))([^?&\"'>]+)/";

        if (preg_match($pattern, $url, $matches)) {
            return $matches[1] ?? null;
        }

        return null;
    }

    /**
     * @param string $url
     *
     * @return string
     */
    private function convertUrl(string $url): string
    {
        $code = $this->getYouTubeCode($url);
        return sprintf('https://www.youtube.com/watch?v=%s', $code);
    }
}
