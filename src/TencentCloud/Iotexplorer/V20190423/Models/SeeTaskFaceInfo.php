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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 任务人脸元数据
 *
 * @method string getCropImageURL() 获取人脸裁剪图下载 URL，仅在请求 FileURLExpireTime 时返回
 * @method void setCropImageURL(string $CropImageURL) 设置人脸裁剪图下载 URL，仅在请求 FileURLExpireTime 时返回
 * @method string getFaceId() 获取人脸 ID
 * @method void setFaceId(string $FaceId) 设置人脸 ID
 * @method string getPersonId() 获取人员 ID
 * @method void setPersonId(string $PersonId) 设置人员 ID
 * @method integer getTimestampMs() 获取人脸所在画面的毫秒级 UNIX 时间戳
 * @method void setTimestampMs(integer $TimestampMs) 设置人脸所在画面的毫秒级 UNIX 时间戳
 */
class SeeTaskFaceInfo extends AbstractModel
{
    /**
     * @var string 人脸裁剪图下载 URL，仅在请求 FileURLExpireTime 时返回
     */
    public $CropImageURL;

    /**
     * @var string 人脸 ID
     */
    public $FaceId;

    /**
     * @var string 人员 ID
     */
    public $PersonId;

    /**
     * @var integer 人脸所在画面的毫秒级 UNIX 时间戳
     */
    public $TimestampMs;

    /**
     * @param string $CropImageURL 人脸裁剪图下载 URL，仅在请求 FileURLExpireTime 时返回
     * @param string $FaceId 人脸 ID
     * @param string $PersonId 人员 ID
     * @param integer $TimestampMs 人脸所在画面的毫秒级 UNIX 时间戳
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
        if (array_key_exists("CropImageURL",$param) and $param["CropImageURL"] !== null) {
            $this->CropImageURL = $param["CropImageURL"];
        }

        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("TimestampMs",$param) and $param["TimestampMs"] !== null) {
            $this->TimestampMs = $param["TimestampMs"];
        }
    }
}
