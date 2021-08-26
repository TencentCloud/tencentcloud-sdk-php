<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataForward请求参数结构体
 *
 * @method string getProductId() 获取产品ID。
 * @method void setProductId(string $ProductId) 设置产品ID。
 * @method string getForwardAddr() 获取转发地址。如果有鉴权Token，则需要自行传入，例如 [{\"forward\":{\"api\":\"http://123.207.117.108:1080/sub.php\",\"token\":\"testtoken\"}}]
 * @method void setForwardAddr(string $ForwardAddr) 设置转发地址。如果有鉴权Token，则需要自行传入，例如 [{\"forward\":{\"api\":\"http://123.207.117.108:1080/sub.php\",\"token\":\"testtoken\"}}]
 * @method integer getDataChose() 获取1-数据信息转发 2-设备上下线状态转发 3-数据信息转发&设备上下线状态转发
 * @method void setDataChose(integer $DataChose) 设置1-数据信息转发 2-设备上下线状态转发 3-数据信息转发&设备上下线状态转发
 */
class CreateDataForwardRequest extends AbstractModel
{
    /**
     * @var string 产品ID。
     */
    public $ProductId;

    /**
     * @var string 转发地址。如果有鉴权Token，则需要自行传入，例如 [{\"forward\":{\"api\":\"http://123.207.117.108:1080/sub.php\",\"token\":\"testtoken\"}}]
     */
    public $ForwardAddr;

    /**
     * @var integer 1-数据信息转发 2-设备上下线状态转发 3-数据信息转发&设备上下线状态转发
     */
    public $DataChose;

    /**
     * @param string $ProductId 产品ID。
     * @param string $ForwardAddr 转发地址。如果有鉴权Token，则需要自行传入，例如 [{\"forward\":{\"api\":\"http://123.207.117.108:1080/sub.php\",\"token\":\"testtoken\"}}]
     * @param integer $DataChose 1-数据信息转发 2-设备上下线状态转发 3-数据信息转发&设备上下线状态转发
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

        if (array_key_exists("ForwardAddr",$param) and $param["ForwardAddr"] !== null) {
            $this->ForwardAddr = $param["ForwardAddr"];
        }

        if (array_key_exists("DataChose",$param) and $param["DataChose"] !== null) {
            $this->DataChose = $param["DataChose"];
        }
    }
}
