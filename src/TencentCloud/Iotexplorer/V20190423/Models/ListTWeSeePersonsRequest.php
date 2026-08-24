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
 * ListTWeSeePersons请求参数结构体
 *
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getLimit() 获取分页拉取数量，取值范围为 1 到 100
 * @method void setLimit(integer $Limit) 设置分页拉取数量，取值范围为 1 到 100
 * @method integer getOffset() 获取分页拉取偏移，默认值为 0
 * @method void setOffset(integer $Offset) 设置分页拉取偏移，默认值为 0
 * @method integer getChannelId() 获取通道 ID，默认值为 0
 * @method void setChannelId(integer $ChannelId) 设置通道 ID，默认值为 0
 * @method integer getFaceLimit() 获取每个人员返回的代表人脸数量，取值范围为 1 到 5，默认值为 1
 * @method void setFaceLimit(integer $FaceLimit) 设置每个人员返回的代表人脸数量，取值范围为 1 到 5，默认值为 1
 * @method boolean getIsRemembered() 获取人员记忆状态。true：仅查询持久记忆人员；false：仅查询非持久记忆人员；不传时查询全部人员
 * @method void setIsRemembered(boolean $IsRemembered) 设置人员记忆状态。true：仅查询持久记忆人员；false：仅查询非持久记忆人员；不传时查询全部人员
 */
class ListTWeSeePersonsRequest extends AbstractModel
{
    /**
     * @var string 产品 ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 分页拉取数量，取值范围为 1 到 100
     */
    public $Limit;

    /**
     * @var integer 分页拉取偏移，默认值为 0
     */
    public $Offset;

    /**
     * @var integer 通道 ID，默认值为 0
     */
    public $ChannelId;

    /**
     * @var integer 每个人员返回的代表人脸数量，取值范围为 1 到 5，默认值为 1
     */
    public $FaceLimit;

    /**
     * @var boolean 人员记忆状态。true：仅查询持久记忆人员；false：仅查询非持久记忆人员；不传时查询全部人员
     */
    public $IsRemembered;

    /**
     * @param string $ProductId 产品 ID
     * @param string $DeviceName 设备名称
     * @param integer $Limit 分页拉取数量，取值范围为 1 到 100
     * @param integer $Offset 分页拉取偏移，默认值为 0
     * @param integer $ChannelId 通道 ID，默认值为 0
     * @param integer $FaceLimit 每个人员返回的代表人脸数量，取值范围为 1 到 5，默认值为 1
     * @param boolean $IsRemembered 人员记忆状态。true：仅查询持久记忆人员；false：仅查询非持久记忆人员；不传时查询全部人员
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("FaceLimit",$param) and $param["FaceLimit"] !== null) {
            $this->FaceLimit = $param["FaceLimit"];
        }

        if (array_key_exists("IsRemembered",$param) and $param["IsRemembered"] !== null) {
            $this->IsRemembered = $param["IsRemembered"];
        }
    }
}
