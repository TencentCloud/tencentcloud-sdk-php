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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceGraphProductIngestTaskList请求参数结构体
 *
 * @method string getResourceGraphId() 获取<p>资源图谱id</p>
 * @method void setResourceGraphId(string $ResourceGraphId) 设置<p>资源图谱id</p>
 * @method array getFilters() 获取<p>过滤条件</p><ul><li>taskId 按照【接入任务id】进行过滤，默认为模糊匹配。类型：String。必选：否 </li><li>product 按照【接入产品】进行过滤，默认为模糊匹配。类型：String。必选：否 </li><li>name 按照【接入任务名称】进行过滤，默认为模糊匹配。类型：String。必选：否 </li><li>status 按照【接入任务状态】进行过滤。类型：int。必选：否 ；0：初始化中；1：已接入；2：接入失败；3：删除中；5：删除失败<br>注意：每次请求的 Filters 的上限为10，Filter.Values 的上限为100。</li></ul>
 * @method void setFilters(array $Filters) 设置<p>过滤条件</p><ul><li>taskId 按照【接入任务id】进行过滤，默认为模糊匹配。类型：String。必选：否 </li><li>product 按照【接入产品】进行过滤，默认为模糊匹配。类型：String。必选：否 </li><li>name 按照【接入任务名称】进行过滤，默认为模糊匹配。类型：String。必选：否 </li><li>status 按照【接入任务状态】进行过滤。类型：int。必选：否 ；0：初始化中；1：已接入；2：接入失败；3：删除中；5：删除失败<br>注意：每次请求的 Filters 的上限为10，Filter.Values 的上限为100。</li></ul>
 * @method integer getOffset() 获取<p>分页偏移量，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认 0</p>
 * @method integer getLimit() 获取<p>分页单页数量，默认 20，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>分页单页数量，默认 20，最大 100</p>
 */
class DescribeResourceGraphProductIngestTaskListRequest extends AbstractModel
{
    /**
     * @var string <p>资源图谱id</p>
     */
    public $ResourceGraphId;

    /**
     * @var array <p>过滤条件</p><ul><li>taskId 按照【接入任务id】进行过滤，默认为模糊匹配。类型：String。必选：否 </li><li>product 按照【接入产品】进行过滤，默认为模糊匹配。类型：String。必选：否 </li><li>name 按照【接入任务名称】进行过滤，默认为模糊匹配。类型：String。必选：否 </li><li>status 按照【接入任务状态】进行过滤。类型：int。必选：否 ；0：初始化中；1：已接入；2：接入失败；3：删除中；5：删除失败<br>注意：每次请求的 Filters 的上限为10，Filter.Values 的上限为100。</li></ul>
     */
    public $Filters;

    /**
     * @var integer <p>分页偏移量，默认 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页单页数量，默认 20，最大 100</p>
     */
    public $Limit;

    /**
     * @param string $ResourceGraphId <p>资源图谱id</p>
     * @param array $Filters <p>过滤条件</p><ul><li>taskId 按照【接入任务id】进行过滤，默认为模糊匹配。类型：String。必选：否 </li><li>product 按照【接入产品】进行过滤，默认为模糊匹配。类型：String。必选：否 </li><li>name 按照【接入任务名称】进行过滤，默认为模糊匹配。类型：String。必选：否 </li><li>status 按照【接入任务状态】进行过滤。类型：int。必选：否 ；0：初始化中；1：已接入；2：接入失败；3：删除中；5：删除失败<br>注意：每次请求的 Filters 的上限为10，Filter.Values 的上限为100。</li></ul>
     * @param integer $Offset <p>分页偏移量，默认 0</p>
     * @param integer $Limit <p>分页单页数量，默认 20，最大 100</p>
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
        if (array_key_exists("ResourceGraphId",$param) and $param["ResourceGraphId"] !== null) {
            $this->ResourceGraphId = $param["ResourceGraphId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
