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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * bot的qps详情
 *
 * @method string getResourceIds() 获取资源id
 * @method void setResourceIds(string $ResourceIds) 设置资源id
 * @method string getValidTime() 获取有效时间
 * @method void setValidTime(string $ValidTime) 设置有效时间
 * @method integer getCount() 获取资源数量
 * @method void setCount(integer $Count) 设置资源数量
 * @method string getRegion() 获取资源所在地区
 * @method void setRegion(string $Region) 设置资源所在地区
 * @method integer getMaxBotQPS() 获取使用qps的最大值
 * @method void setMaxBotQPS(integer $MaxBotQPS) 设置使用qps的最大值
 * @method integer getRenewFlag() 获取续费标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(integer $RenewFlag) 设置续费标志
注意：此字段可能返回 null，表示取不到有效值。
 */
class BotQPS extends AbstractModel
{
    /**
     * @var string 资源id
     */
    public $ResourceIds;

    /**
     * @var string 有效时间
     */
    public $ValidTime;

    /**
     * @var integer 资源数量
     */
    public $Count;

    /**
     * @var string 资源所在地区
     */
    public $Region;

    /**
     * @var integer 使用qps的最大值
     */
    public $MaxBotQPS;

    /**
     * @var integer 续费标志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @param string $ResourceIds 资源id
     * @param string $ValidTime 有效时间
     * @param integer $Count 资源数量
     * @param string $Region 资源所在地区
     * @param integer $MaxBotQPS 使用qps的最大值
     * @param integer $RenewFlag 续费标志
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("MaxBotQPS",$param) and $param["MaxBotQPS"] !== null) {
            $this->MaxBotQPS = $param["MaxBotQPS"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
