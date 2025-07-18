<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePicture请求参数结构体
 *
 * @method integer getPictureId() 获取图片id
 * @method void setPictureId(integer $PictureId) 设置图片id
 * @method integer getSdkAppId() 获取应用id
 * @method void setSdkAppId(integer $SdkAppId) 设置应用id
 */
class DeletePictureRequest extends AbstractModel
{
    /**
     * @var integer 图片id
     */
    public $PictureId;

    /**
     * @var integer 应用id
     */
    public $SdkAppId;

    /**
     * @param integer $PictureId 图片id
     * @param integer $SdkAppId 应用id
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
        if (array_key_exists("PictureId",$param) and $param["PictureId"] !== null) {
            $this->PictureId = $param["PictureId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
