<?php
/**
 * This file is part of the AeroGearPush package.
 *
 * (c) Napp <http://napp.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Napp\AeroGearPush\Request;

/**
 * Class AbstractApplicationRequest
 *
 * @package Napp\AeroGearPush\Request
 */
class AbstractApplicationRequest
{
    /**
     * @var
     */
    public $endpoint;

    /**
     * @var
     */
    public $OAuthToken;

    /**
     * @var
     */
    public $pushAppId;

    /**
     * @var
     */
    public $headers;

    /**
     * @var
     */
    public $data;

    /**
     * @var
     */
    public $auth;

    /**
     * @var
     */
    public $url;

    /**
     * @var
     */
    public $method;

    /**
     * @var
     */
    public $queryParam;

    /**
     * @return mixed
     */
    public function getOAuthToken()
    {
        return $this->OAuthToken;
    }

    /**
     * @param mixed $oAuthToken
     *
     * @return $this
     */
    public function setOAuthToken($OAuthToken)
    {
        $this->OAuthToken = $OAuthToken;

        return $this;
    }

    /**
     * @param $endpoint
     *
     * @return $this
     */
    protected function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * @param string $method
     *
     * @return $this
     */
    protected function setMethod($method = 'GET')
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @param $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param $pushAppId
     * @param $masterSecret
     *
     * @return $this
     */
    public function setAuth($pushAppId, $masterSecret)
    {
        $this->auth = [
          $pushAppId,
          $masterSecret,
        ];

        return $this;
    }

    /**
     * @param $key
     * @param $value
     *
     * @return $this
     */
    public function setHeader($key, $value)
    {
        $this->headers['headers'][$key] = $value;

        return $this;
    }

    /**
     * @param string $contentType
     *
     * @return $this
     */
    public function setContentType($contentType = 'application/json')
    {
        $this->setHeader('Content-Type', $contentType);

        return $this;
    }

    /**
     * @param $developer
     *
     * @return $this
     */
    public function setDeveloper($developer)
    {
        $this->setData('developer', $developer);

        return $this;
    }

    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->setData('name', $name);

        return $this;
    }

    /**
     * @param $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->setData('description', $description);

        return $this;
    }

    /**
     * @param $key
     * @param $value
     *
     * @return $this
     */
    public function setData($key, $value)
    {
        $this->data[$key] = $value;

        return $this;
    }

    /**
     * @param $key
     * @param $value
     *
     * @return $this
     */
    public function setQueryParam($key, $value)
    {
        $this->queryParam[$key] = $value;

        return $this;
    }

    /**
     * @param $pushAppId
     *
     * @return $this
     */
    public function setPushAppId($pushAppId)
    {
        $this->pushAppId = $pushAppId;

        return $this;
    }
}
