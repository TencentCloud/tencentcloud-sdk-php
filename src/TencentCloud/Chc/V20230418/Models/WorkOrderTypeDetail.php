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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工单类型详情
 *
 * @method string getWorkOrderFamily() 获取工单类型所属的大类
 * @method void setWorkOrderFamily(string $WorkOrderFamily) 设置工单类型所属的大类
 * @method string getWorkOrderName() 获取工单类型名称
 * @method void setWorkOrderName(string $WorkOrderName) 设置工单类型名称
 * @method string getWorkOrderType() 获取工单类型的唯一英文标识
 * @method void setWorkOrderType(string $WorkOrderType) 设置工单类型的唯一英文标识
 * @method string getWorkOrderDescription() 获取工单类型简述
 * @method void setWorkOrderDescription(string $WorkOrderDescription) 设置工单类型简述
 * @method boolean getCollectFlag() 获取是否被收藏
 * @method void setCollectFlag(boolean $CollectFlag) 设置是否被收藏
 * @method string getSlaMessage() 获取服务时效
 * @method void setSlaMessage(string $SlaMessage) 设置服务时效
 */
class WorkOrderTypeDetail extends AbstractModel
{
    /**
     * @var string 工单类型所属的大类
     */
    public $WorkOrderFamily;

    /**
     * @var string 工单类型名称
     */
    public $WorkOrderName;

    /**
     * @var string 工单类型的唯一英文标识
     */
    public $WorkOrderType;

    /**
     * @var string 工单类型简述
     */
    public $WorkOrderDescription;

    /**
     * @var boolean 是否被收藏
     */
    public $CollectFlag;

    /**
     * @var string 服务时效
     */
    public $SlaMessage;

    /**
     * @param string $WorkOrderFamily 工单类型所属的大类
     * @param string $WorkOrderName 工单类型名称
     * @param string $WorkOrderType 工单类型的唯一英文标识
     * @param string $WorkOrderDescription 工单类型简述
     * @param boolean $CollectFlag 是否被收藏
     * @param string $SlaMessage 服务时效
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
        if (array_key_exists("WorkOrderFamily",$param) and $param["WorkOrderFamily"] !== null) {
            $this->WorkOrderFamily = $param["WorkOrderFamily"];
        }

        if (array_key_exists("WorkOrderName",$param) and $param["WorkOrderName"] !== null) {
            $this->WorkOrderName = $param["WorkOrderName"];
        }

        if (array_key_exists("WorkOrderType",$param) and $param["WorkOrderType"] !== null) {
            $this->WorkOrderType = $param["WorkOrderType"];
        }

        if (array_key_exists("WorkOrderDescription",$param) and $param["WorkOrderDescription"] !== null) {
            $this->WorkOrderDescription = $param["WorkOrderDescription"];
        }

        if (array_key_exists("CollectFlag",$param) and $param["CollectFlag"] !== null) {
            $this->CollectFlag = $param["CollectFlag"];
        }

        if (array_key_exists("SlaMessage",$param) and $param["SlaMessage"] !== null) {
            $this->SlaMessage = $param["SlaMessage"];
        }
    }
}
