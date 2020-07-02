<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频素材信息
 *
 * @method MediaMetaData getMetaData() 获取素材元信息。
 * @method void setMetaData(MediaMetaData $MetaData) 设置素材元信息。
 * @method MediaImageSpriteInfo getImageSpriteInfo() 获取雪碧图信息。
 * @method void setImageSpriteInfo(MediaImageSpriteInfo $ImageSpriteInfo) 设置雪碧图信息。
 * @method string getMaterialUrl() 获取素材媒体文件的 URL 地址
 * @method void setMaterialUrl(string $MaterialUrl) 设置素材媒体文件的 URL 地址
 * @method string getCoverUrl() 获取素材媒体文件的封面图片地址。
 * @method void setCoverUrl(string $CoverUrl) 设置素材媒体文件的封面图片地址。
 * @method string getResolution() 获取媒体文件分辨率。取值为：LD/SD/HD/FHD/2K/4K。
 * @method void setResolution(string $Resolution) 设置媒体文件分辨率。取值为：LD/SD/HD/FHD/2K/4K。
 * @method MaterialStatus getMaterialStatus() 获取素材状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaterialStatus(MaterialStatus $MaterialStatus) 设置素材状态。
注意：此字段可能返回 null，表示取不到有效值。
 */
class VideoMaterial extends AbstractModel
{
    /**
     * @var MediaMetaData 素材元信息。
     */
    public $MetaData;

    /**
     * @var MediaImageSpriteInfo 雪碧图信息。
     */
    public $ImageSpriteInfo;

    /**
     * @var string 素材媒体文件的 URL 地址
     */
    public $MaterialUrl;

    /**
     * @var string 素材媒体文件的封面图片地址。
     */
    public $CoverUrl;

    /**
     * @var string 媒体文件分辨率。取值为：LD/SD/HD/FHD/2K/4K。
     */
    public $Resolution;

    /**
     * @var MaterialStatus 素材状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaterialStatus;

    /**
     * @param MediaMetaData $MetaData 素材元信息。
     * @param MediaImageSpriteInfo $ImageSpriteInfo 雪碧图信息。
     * @param string $MaterialUrl 素材媒体文件的 URL 地址
     * @param string $CoverUrl 素材媒体文件的封面图片地址。
     * @param string $Resolution 媒体文件分辨率。取值为：LD/SD/HD/FHD/2K/4K。
     * @param MaterialStatus $MaterialStatus 素材状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('MetaData',$param) and $param['MetaData'] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param['MetaData']);
        }

        if (array_key_exists('ImageSpriteInfo',$param) and $param['ImageSpriteInfo'] !== null) {
            $this->ImageSpriteInfo = new MediaImageSpriteInfo();
            $this->ImageSpriteInfo->deserialize($param['ImageSpriteInfo']);
        }

        if (array_key_exists('MaterialUrl',$param) and $param['MaterialUrl'] !== null) {
            $this->MaterialUrl = $param['MaterialUrl'];
        }

        if (array_key_exists('CoverUrl',$param) and $param['CoverUrl'] !== null) {
            $this->CoverUrl = $param['CoverUrl'];
        }

        if (array_key_exists('Resolution',$param) and $param['Resolution'] !== null) {
            $this->Resolution = $param['Resolution'];
        }

        if (array_key_exists('MaterialStatus',$param) and $param['MaterialStatus'] !== null) {
            $this->MaterialStatus = new MaterialStatus();
            $this->MaterialStatus->deserialize($param['MaterialStatus']);
        }
    }
}
