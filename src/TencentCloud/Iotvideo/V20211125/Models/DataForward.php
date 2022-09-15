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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据转发描述
 *
 * @method string getProductId() 获取产品ID。
 * @method void setProductId(string $ProductId) 设置产品ID。
 * @method string getForwardAddr() 获取转发地址。
 * @method void setForwardAddr(string $ForwardAddr) 设置转发地址。
 * @method integer getStatus() 获取转发状态。
 * @method void setStatus(integer $Status) 设置转发状态。
 * @method integer getCreateTime() 获取创建时间。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间。
 * @method integer getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间。
 * @method integer getDataChose() 获取1-数据信息转发 2-设备上下线状态转发 3-数据信息转发&设备上下线状态转发
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataChose(integer $DataChose) 设置1-数据信息转发 2-设备上下线状态转发 3-数据信息转发&设备上下线状态转发
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataForward extends AbstractModel
{
    /**
     * @var string 产品ID。
     */
    public $ProductId;

    /**
     * @var string 转发地址。
     */
    public $ForwardAddr;

    /**
     * @var integer 转发状态。
     */
    public $Status;

    /**
     * @var integer 创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间。
     */
    public $UpdateTime;

    /**
     * @var integer 1-数据信息转发 2-设备上下线状态转发 3-数据信息转发&设备上下线状态转发
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataChose;

    /**
     * @param string $ProductId 产品ID。
     * @param string $ForwardAddr 转发地址。
     * @param integer $Status 转发状态。
     * @param integer $CreateTime 创建时间。
     * @param integer $UpdateTime 更新时间。
     * @param integer $DataChose 1-数据信息转发 2-设备上下线状态转发 3-数据信息转发&设备上下线状态转发
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ForwardAddr",$param) and $param["ForwardAddr"] !== null) {
            $this->ForwardAddr = $param["ForwardAddr"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DataChose",$param) and $param["DataChose"] !== null) {
            $this->DataChose = $param["DataChose"];
        }
    }
}
