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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeployHistory请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getEnvId() 获取环境 ID。
 * @method void setEnvId(string $EnvId) 设置环境 ID。
 * @method array getFilters() 获取过滤条件，Filters.Values 的上限为 20，详细的过滤条件如下：
<li>record-id：按照发布记录 ID 进行过滤进行过滤。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values 的上限为 20，详细的过滤条件如下：
<li>record-id：按照发布记录 ID 进行过滤进行过滤。</li>
 */
class DescribeDeployHistoryRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 环境 ID。
     */
    public $EnvId;

    /**
     * @var array 过滤条件，Filters.Values 的上限为 20，详细的过滤条件如下：
<li>record-id：按照发布记录 ID 进行过滤进行过滤。</li>
     */
    public $Filters;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $EnvId 环境 ID。
     * @param array $Filters 过滤条件，Filters.Values 的上限为 20，详细的过滤条件如下：
<li>record-id：按照发布记录 ID 进行过滤进行过滤。</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
