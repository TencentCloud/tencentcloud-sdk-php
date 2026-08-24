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
 * TWeSee 人脸元数据
 *
 * @method array getBoundingBox() 获取人脸框坐标，依次为左、上、右、下，取值范围为 0 到 1
 * @method void setBoundingBox(array $BoundingBox) 设置人脸框坐标，依次为左、上、右、下，取值范围为 0 到 1
 * @method string getFaceId() 获取人脸 ID
 * @method void setFaceId(string $FaceId) 设置人脸 ID
 * @method string getCropImageURL() 获取人脸裁剪图 URL
 * @method void setCropImageURL(string $CropImageURL) 设置人脸裁剪图 URL
 * @method boolean getIsPrototype() 获取是否为代表人脸
 * @method void setIsPrototype(boolean $IsPrototype) 设置是否为代表人脸
 * @method string getPersonId() 获取人员 ID
 * @method void setPersonId(string $PersonId) 设置人员 ID
 * @method integer getSource() 获取创建来源。0：自动识别；1：图片导入
 * @method void setSource(integer $Source) 设置创建来源。0：自动识别；1：图片导入
 * @method integer getTimestampMs() 获取人脸所在画面的毫秒级 UNIX 时间戳
 * @method void setTimestampMs(integer $TimestampMs) 设置人脸所在画面的毫秒级 UNIX 时间戳
 */
class SeeFaceInfo extends AbstractModel
{
    /**
     * @var array 人脸框坐标，依次为左、上、右、下，取值范围为 0 到 1
     */
    public $BoundingBox;

    /**
     * @var string 人脸 ID
     */
    public $FaceId;

    /**
     * @var string 人脸裁剪图 URL
     */
    public $CropImageURL;

    /**
     * @var boolean 是否为代表人脸
     */
    public $IsPrototype;

    /**
     * @var string 人员 ID
     */
    public $PersonId;

    /**
     * @var integer 创建来源。0：自动识别；1：图片导入
     */
    public $Source;

    /**
     * @var integer 人脸所在画面的毫秒级 UNIX 时间戳
     */
    public $TimestampMs;

    /**
     * @param array $BoundingBox 人脸框坐标，依次为左、上、右、下，取值范围为 0 到 1
     * @param string $FaceId 人脸 ID
     * @param string $CropImageURL 人脸裁剪图 URL
     * @param boolean $IsPrototype 是否为代表人脸
     * @param string $PersonId 人员 ID
     * @param integer $Source 创建来源。0：自动识别；1：图片导入
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
        if (array_key_exists("BoundingBox",$param) and $param["BoundingBox"] !== null) {
            $this->BoundingBox = $param["BoundingBox"];
        }

        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("CropImageURL",$param) and $param["CropImageURL"] !== null) {
            $this->CropImageURL = $param["CropImageURL"];
        }

        if (array_key_exists("IsPrototype",$param) and $param["IsPrototype"] !== null) {
            $this->IsPrototype = $param["IsPrototype"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TimestampMs",$param) and $param["TimestampMs"] !== null) {
            $this->TimestampMs = $param["TimestampMs"];
        }
    }
}
