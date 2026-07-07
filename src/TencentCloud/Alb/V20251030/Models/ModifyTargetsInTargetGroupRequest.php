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
 * ModifyTargetsInTargetGroup请求参数结构体
 *
 * @method string getTargetGroupId() 获取目标组 ID，格式为 lbtg- 后接 8 位字母数字。
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组 ID，格式为 lbtg- 后接 8 位字母数字。
 * @method boolean getDryRun() 获取是否预览此次请求。 
- **false**（默认）：发送普通请求，直接修改后端服务信息。 
- **true**：发送预览请求，检查修改后端服务的参数、格式、业务限制等是否符合要求。
 * @method void setDryRun(boolean $DryRun) 设置是否预览此次请求。 
- **false**（默认）：发送普通请求，直接修改后端服务信息。 
- **true**：发送预览请求，检查修改后端服务的参数、格式、业务限制等是否符合要求。
 * @method array getTargets() 获取需要修改的后端服务列表。
 * @method void setTargets(array $Targets) 设置需要修改的后端服务列表。
 */
class ModifyTargetsInTargetGroupRequest extends AbstractModel
{
    /**
     * @var string 目标组 ID，格式为 lbtg- 后接 8 位字母数字。
     */
    public $TargetGroupId;

    /**
     * @var boolean 是否预览此次请求。 
- **false**（默认）：发送普通请求，直接修改后端服务信息。 
- **true**：发送预览请求，检查修改后端服务的参数、格式、业务限制等是否符合要求。
     */
    public $DryRun;

    /**
     * @var array 需要修改的后端服务列表。
     */
    public $Targets;

    /**
     * @param string $TargetGroupId 目标组 ID，格式为 lbtg- 后接 8 位字母数字。
     * @param boolean $DryRun 是否预览此次请求。 
- **false**（默认）：发送普通请求，直接修改后端服务信息。 
- **true**：发送预览请求，检查修改后端服务的参数、格式、业务限制等是否符合要求。
     * @param array $Targets 需要修改的后端服务列表。
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new TargetToModify();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}
