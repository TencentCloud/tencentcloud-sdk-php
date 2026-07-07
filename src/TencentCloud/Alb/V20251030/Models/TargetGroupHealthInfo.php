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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组健康检查状态
 *
 * @method boolean getHealthCheckEnabled() 获取是否开启健康检查。
 * @method void setHealthCheckEnabled(boolean $HealthCheckEnabled) 设置是否开启健康检查。
 * @method string getTargetGroupId() 获取目标组 ID，格式为 lbtg- 后接 8 位字母数字。
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组 ID，格式为 lbtg- 后接 8 位字母数字。
 * @method array getTargetHealthStatusInfos() 获取服务健康检查状态列表。
 * @method void setTargetHealthStatusInfos(array $TargetHealthStatusInfos) 设置服务健康检查状态列表。
 * @method string getType() 获取转发动作类型。取值：
TargetGroup：转发至目标组。
Redirect：重定向。
FixedResponse：返回固定内容。
Rewrite：重写。
InsertHeader：写入HTTP Header。
RemoveHeader：删除HTTP Header。
转发动作必选包含TargetGroup,Redirect,FixedResponse其中一个，并且执行顺序放在最后。
 * @method void setType(string $Type) 设置转发动作类型。取值：
TargetGroup：转发至目标组。
Redirect：重定向。
FixedResponse：返回固定内容。
Rewrite：重写。
InsertHeader：写入HTTP Header。
RemoveHeader：删除HTTP Header。
转发动作必选包含TargetGroup,Redirect,FixedResponse其中一个，并且执行顺序放在最后。
 */
class TargetGroupHealthInfo extends AbstractModel
{
    /**
     * @var boolean 是否开启健康检查。
     */
    public $HealthCheckEnabled;

    /**
     * @var string 目标组 ID，格式为 lbtg- 后接 8 位字母数字。
     */
    public $TargetGroupId;

    /**
     * @var array 服务健康检查状态列表。
     */
    public $TargetHealthStatusInfos;

    /**
     * @var string 转发动作类型。取值：
TargetGroup：转发至目标组。
Redirect：重定向。
FixedResponse：返回固定内容。
Rewrite：重写。
InsertHeader：写入HTTP Header。
RemoveHeader：删除HTTP Header。
转发动作必选包含TargetGroup,Redirect,FixedResponse其中一个，并且执行顺序放在最后。
     */
    public $Type;

    /**
     * @param boolean $HealthCheckEnabled 是否开启健康检查。
     * @param string $TargetGroupId 目标组 ID，格式为 lbtg- 后接 8 位字母数字。
     * @param array $TargetHealthStatusInfos 服务健康检查状态列表。
     * @param string $Type 转发动作类型。取值：
TargetGroup：转发至目标组。
Redirect：重定向。
FixedResponse：返回固定内容。
Rewrite：重写。
InsertHeader：写入HTTP Header。
RemoveHeader：删除HTTP Header。
转发动作必选包含TargetGroup,Redirect,FixedResponse其中一个，并且执行顺序放在最后。
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
        if (array_key_exists("HealthCheckEnabled",$param) and $param["HealthCheckEnabled"] !== null) {
            $this->HealthCheckEnabled = $param["HealthCheckEnabled"];
        }

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetHealthStatusInfos",$param) and $param["TargetHealthStatusInfos"] !== null) {
            $this->TargetHealthStatusInfos = [];
            foreach ($param["TargetHealthStatusInfos"] as $key => $value){
                $obj = new TargetHealthStatusInfo();
                $obj->deserialize($value);
                array_push($this->TargetHealthStatusInfos, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
