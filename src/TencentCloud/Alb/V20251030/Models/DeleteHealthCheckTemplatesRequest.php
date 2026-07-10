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
 * DeleteHealthCheckTemplates请求参数结构体
 *
 * @method array getHealthCheckTemplateIds() 获取健康检查模板 ID 列表，ID 格式为 hct- 后接字母数字。
 * @method void setHealthCheckTemplateIds(array $HealthCheckTemplateIds) 设置健康检查模板 ID 列表，ID 格式为 hct- 后接字母数字。
 * @method boolean getDryRun() 获取是否预览此次请求。
- **false**（默认）：发送普通请求，直接删除模板。
- **true**：发送预览请求，检查删除模板的参数、格式、业务限制等是否符合要求。
 * @method void setDryRun(boolean $DryRun) 设置是否预览此次请求。
- **false**（默认）：发送普通请求，直接删除模板。
- **true**：发送预览请求，检查删除模板的参数、格式、业务限制等是否符合要求。
 */
class DeleteHealthCheckTemplatesRequest extends AbstractModel
{
    /**
     * @var array 健康检查模板 ID 列表，ID 格式为 hct- 后接字母数字。
     */
    public $HealthCheckTemplateIds;

    /**
     * @var boolean 是否预览此次请求。
- **false**（默认）：发送普通请求，直接删除模板。
- **true**：发送预览请求，检查删除模板的参数、格式、业务限制等是否符合要求。
     */
    public $DryRun;

    /**
     * @param array $HealthCheckTemplateIds 健康检查模板 ID 列表，ID 格式为 hct- 后接字母数字。
     * @param boolean $DryRun 是否预览此次请求。
- **false**（默认）：发送普通请求，直接删除模板。
- **true**：发送预览请求，检查删除模板的参数、格式、业务限制等是否符合要求。
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
        if (array_key_exists("HealthCheckTemplateIds",$param) and $param["HealthCheckTemplateIds"] !== null) {
            $this->HealthCheckTemplateIds = $param["HealthCheckTemplateIds"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
