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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateBindResourceTaskDetail请求参数结构体
 *
 * @method string getTaskId() 获取任务ID，根据任务ID查询绑定云资源结果
 * @method void setTaskId(string $TaskId) 设置任务ID，根据任务ID查询绑定云资源结果
 * @method string getLimit() 获取每页展示数量， 默认10，最大值100; 分页总数为云资源地域下实例总数， 即第一页会拉群每个云资源的地域下面Limit数量实例
 * @method void setLimit(string $Limit) 设置每页展示数量， 默认10，最大值100; 分页总数为云资源地域下实例总数， 即第一页会拉群每个云资源的地域下面Limit数量实例
 * @method string getOffset() 获取当前偏移量
 * @method void setOffset(string $Offset) 设置当前偏移量
 * @method array getResourceTypes() 获取查询资源类型的结果详情， 不传则查询所有
 * @method void setResourceTypes(array $ResourceTypes) 设置查询资源类型的结果详情， 不传则查询所有
 * @method array getRegions() 获取查询地域列表的数据，CLB、TKE、WAF、APIGATEWAY、TCB支持地域查询， 其他资源类型不支持
 * @method void setRegions(array $Regions) 设置查询地域列表的数据，CLB、TKE、WAF、APIGATEWAY、TCB支持地域查询， 其他资源类型不支持
 */
class DescribeCertificateBindResourceTaskDetailRequest extends AbstractModel
{
    /**
     * @var string 任务ID，根据任务ID查询绑定云资源结果
     */
    public $TaskId;

    /**
     * @var string 每页展示数量， 默认10，最大值100; 分页总数为云资源地域下实例总数， 即第一页会拉群每个云资源的地域下面Limit数量实例
     */
    public $Limit;

    /**
     * @var string 当前偏移量
     */
    public $Offset;

    /**
     * @var array 查询资源类型的结果详情， 不传则查询所有
     */
    public $ResourceTypes;

    /**
     * @var array 查询地域列表的数据，CLB、TKE、WAF、APIGATEWAY、TCB支持地域查询， 其他资源类型不支持
     */
    public $Regions;

    /**
     * @param string $TaskId 任务ID，根据任务ID查询绑定云资源结果
     * @param string $Limit 每页展示数量， 默认10，最大值100; 分页总数为云资源地域下实例总数， 即第一页会拉群每个云资源的地域下面Limit数量实例
     * @param string $Offset 当前偏移量
     * @param array $ResourceTypes 查询资源类型的结果详情， 不传则查询所有
     * @param array $Regions 查询地域列表的数据，CLB、TKE、WAF、APIGATEWAY、TCB支持地域查询， 其他资源类型不支持
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }
    }
}
