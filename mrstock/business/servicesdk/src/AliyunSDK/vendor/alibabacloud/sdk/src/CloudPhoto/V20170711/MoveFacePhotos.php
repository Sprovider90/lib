<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of MoveFacePhotos
 *
 * @method string getLibraryId()
 * @method string getTargetFaceId()
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method string getSourceFaceId()
 */
class MoveFacePhotos extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudPhoto';

    /**
     * @var string
     */
    public $version = '2017-07-11';

    /**
     * @var string
     */
    public $action = 'MoveFacePhotos';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudphoto';

    /**
     * @deprecated deprecated since version 2.0, Use withLibraryId() instead.
     *
     * @param string $libraryId
     *
     * @return $this
     */
    public function setLibraryId($libraryId)
    {
        return $this->withLibraryId($libraryId);
    }

    /**
     * @param string $libraryId
     *
     * @return $this
     */
    public function withLibraryId($libraryId)
    {
        $this->data['LibraryId'] = $libraryId;
        $this->options['query']['LibraryId'] = $libraryId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTargetFaceId() instead.
     *
     * @param string $targetFaceId
     *
     * @return $this
     */
    public function setTargetFaceId($targetFaceId)
    {
        return $this->withTargetFaceId($targetFaceId);
    }

    /**
     * @param string $targetFaceId
     *
     * @return $this
     */
    public function withTargetFaceId($targetFaceId)
    {
        $this->data['TargetFaceId'] = $targetFaceId;
        $this->options['query']['TargetFaceId'] = $targetFaceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getPhotoId() instead.
     *
     * @return array
     */
    public function getPhotoIds()
    {
        return $this->getPhotoId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPhotoId() instead.
     *
     * @param array $photoIds
     *
     * @return $this
     */
    public function setPhotoIds(array $photoIds)
    {
        return $this->withPhotoId($photoIds);
    }

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStoreName() instead.
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        return $this->withStoreName($storeName);
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceFaceId() instead.
     *
     * @param string $sourceFaceId
     *
     * @return $this
     */
    public function setSourceFaceId($sourceFaceId)
    {
        return $this->withSourceFaceId($sourceFaceId);
    }

    /**
     * @param string $sourceFaceId
     *
     * @return $this
     */
    public function withSourceFaceId($sourceFaceId)
    {
        $this->data['SourceFaceId'] = $sourceFaceId;
        $this->options['query']['SourceFaceId'] = $sourceFaceId;

        return $this;
    }
}
