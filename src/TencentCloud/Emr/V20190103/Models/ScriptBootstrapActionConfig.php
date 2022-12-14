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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 添加引导操作
 *
 * @method string getCosFileURI() 获取脚本的cos地址，参照格式：https://beijing-111111.cos.ap-beijing.myqcloud.com/data/test.sh查询cos存储桶列表：[存储桶列表](https://console.cloud.tencent.com/cos/bucket)
 * @method void setCosFileURI(string $CosFileURI) 设置脚本的cos地址，参照格式：https://beijing-111111.cos.ap-beijing.myqcloud.com/data/test.sh查询cos存储桶列表：[存储桶列表](https://console.cloud.tencent.com/cos/bucket)
 * @method string getExecutionMoment() 获取引导脚步执行时机范围
<li>resourceAfter：节点初始化后</li>
<li>clusterAfter：集群启动后</li>
<li>clusterBefore：集群启动前</li>
 * @method void setExecutionMoment(string $ExecutionMoment) 设置引导脚步执行时机范围
<li>resourceAfter：节点初始化后</li>
<li>clusterAfter：集群启动后</li>
<li>clusterBefore：集群启动前</li>
 * @method array getArgs() 获取执行脚本参数，参数格式请遵循标准Shell规范
 * @method void setArgs(array $Args) 设置执行脚本参数，参数格式请遵循标准Shell规范
 * @method string getCosFileName() 获取脚本文件名
 * @method void setCosFileName(string $CosFileName) 设置脚本文件名
 */
class ScriptBootstrapActionConfig extends AbstractModel
{
    /**
     * @var string 脚本的cos地址，参照格式：https://beijing-111111.cos.ap-beijing.myqcloud.com/data/test.sh查询cos存储桶列表：[存储桶列表](https://console.cloud.tencent.com/cos/bucket)
     */
    public $CosFileURI;

    /**
     * @var string 引导脚步执行时机范围
<li>resourceAfter：节点初始化后</li>
<li>clusterAfter：集群启动后</li>
<li>clusterBefore：集群启动前</li>
     */
    public $ExecutionMoment;

    /**
     * @var array 执行脚本参数，参数格式请遵循标准Shell规范
     */
    public $Args;

    /**
     * @var string 脚本文件名
     */
    public $CosFileName;

    /**
     * @param string $CosFileURI 脚本的cos地址，参照格式：https://beijing-111111.cos.ap-beijing.myqcloud.com/data/test.sh查询cos存储桶列表：[存储桶列表](https://console.cloud.tencent.com/cos/bucket)
     * @param string $ExecutionMoment 引导脚步执行时机范围
<li>resourceAfter：节点初始化后</li>
<li>clusterAfter：集群启动后</li>
<li>clusterBefore：集群启动前</li>
     * @param array $Args 执行脚本参数，参数格式请遵循标准Shell规范
     * @param string $CosFileName 脚本文件名
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
        if (array_key_exists("CosFileURI",$param) and $param["CosFileURI"] !== null) {
            $this->CosFileURI = $param["CosFileURI"];
        }

        if (array_key_exists("ExecutionMoment",$param) and $param["ExecutionMoment"] !== null) {
            $this->ExecutionMoment = $param["ExecutionMoment"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("CosFileName",$param) and $param["CosFileName"] !== null) {
            $this->CosFileName = $param["CosFileName"];
        }
    }
}
