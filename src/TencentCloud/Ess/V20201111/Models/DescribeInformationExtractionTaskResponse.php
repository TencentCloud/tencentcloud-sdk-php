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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInformationExtractionTask返回参数结构体
 *
 * @method array getFields() 获取合同信息提取字段信息
 * @method void setFields(array $Fields) 设置合同信息提取字段信息
 * @method integer getStatus() 获取合同智能提取任务状态。
状态如下：
<ul>
    <li>**0** - 任务创建成功（还未执行）</li> 
    <li>**1** - 排队中（等待执行）</li>   
    <li>**2** - 提取中（正在执行）</li>  
    <li>**3** - 提取成功</li>   
    <li>**4** - 提取失败</li>
</ul>
 * @method void setStatus(integer $Status) 设置合同智能提取任务状态。
状态如下：
<ul>
    <li>**0** - 任务创建成功（还未执行）</li> 
    <li>**1** - 排队中（等待执行）</li>   
    <li>**2** - 提取中（正在执行）</li>  
    <li>**3** - 提取成功</li>   
    <li>**4** - 提取失败</li>
</ul>
 * @method string getUrl() 获取合同智能提取结果下载，文件格式为`xlsx`。

注意：`链接有效期为5分钟，过期后可重新获取`
 * @method void setUrl(string $Url) 设置合同智能提取结果下载，文件格式为`xlsx`。

注意：`链接有效期为5分钟，过期后可重新获取`
 * @method array getResults() 获取合同信息提取结果信息
 * @method void setResults(array $Results) 设置合同信息提取结果信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInformationExtractionTaskResponse extends AbstractModel
{
    /**
     * @var array 合同信息提取字段信息
     */
    public $Fields;

    /**
     * @var integer 合同智能提取任务状态。
状态如下：
<ul>
    <li>**0** - 任务创建成功（还未执行）</li> 
    <li>**1** - 排队中（等待执行）</li>   
    <li>**2** - 提取中（正在执行）</li>  
    <li>**3** - 提取成功</li>   
    <li>**4** - 提取失败</li>
</ul>
     */
    public $Status;

    /**
     * @var string 合同智能提取结果下载，文件格式为`xlsx`。

注意：`链接有效期为5分钟，过期后可重新获取`
     */
    public $Url;

    /**
     * @var array 合同信息提取结果信息
     */
    public $Results;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Fields 合同信息提取字段信息
     * @param integer $Status 合同智能提取任务状态。
状态如下：
<ul>
    <li>**0** - 任务创建成功（还未执行）</li> 
    <li>**1** - 排队中（等待执行）</li>   
    <li>**2** - 提取中（正在执行）</li>  
    <li>**3** - 提取成功</li>   
    <li>**4** - 提取失败</li>
</ul>
     * @param string $Url 合同智能提取结果下载，文件格式为`xlsx`。

注意：`链接有效期为5分钟，过期后可重新获取`
     * @param array $Results 合同信息提取结果信息
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new ExtractionField();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new ExtractionTaskResult();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
