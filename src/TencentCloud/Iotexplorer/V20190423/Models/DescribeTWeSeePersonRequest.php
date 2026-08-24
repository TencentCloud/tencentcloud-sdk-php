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
 * DescribeTWeSeePerson请求参数结构体
 *
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getPersonId() 获取人员 ID
 * @method void setPersonId(string $PersonId) 设置人员 ID
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method integer getChannelId() 获取通道 ID，默认值为 0
 * @method void setChannelId(integer $ChannelId) 设置通道 ID，默认值为 0
 * @method integer getFaceLimit() 获取返回的代表人脸数量，取值范围为 1 到 5，默认值为 1
 * @method void setFaceLimit(integer $FaceLimit) 设置返回的代表人脸数量，取值范围为 1 到 5，默认值为 1
 */
class DescribeTWeSeePersonRequest extends AbstractModel
{
    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 人员 ID
     */
    public $PersonId;

    /**
     * @var string 产品 ID
     */
    public $ProductId;

    /**
     * @var integer 通道 ID，默认值为 0
     */
    public $ChannelId;

    /**
     * @var integer 返回的代表人脸数量，取值范围为 1 到 5，默认值为 1
     */
    public $FaceLimit;

    /**
     * @param string $DeviceName 设备名称
     * @param string $PersonId 人员 ID
     * @param string $ProductId 产品 ID
     * @param integer $ChannelId 通道 ID，默认值为 0
     * @param integer $FaceLimit 返回的代表人脸数量，取值范围为 1 到 5，默认值为 1
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("FaceLimit",$param) and $param["FaceLimit"] !== null) {
            $this->FaceLimit = $param["FaceLimit"];
        }
    }
}
