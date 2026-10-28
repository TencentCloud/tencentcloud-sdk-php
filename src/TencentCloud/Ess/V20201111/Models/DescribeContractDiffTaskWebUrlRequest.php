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
 * DescribeContractDiffTaskWebUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。使用此接口时，必须填写userId。</p><p>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。使用此接口时，必须填写userId。</p><p>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getTaskId() 获取<p>合同对比任务ID，该参数通过调用接口<a href="https://qian.tencent.com/developers/companyApis/embedPages/CreateContractDiffTaskWebUrl" target="_blank">创建合同对比web页面</a>获取。</p>
 * @method void setTaskId(string $TaskId) 设置<p>合同对比任务ID，该参数通过调用接口<a href="https://qian.tencent.com/developers/companyApis/embedPages/CreateContractDiffTaskWebUrl" target="_blank">创建合同对比web页面</a>获取。</p>
 * @method FormatConfigs getFormatConfigs() 获取<p>过滤项列表，获取合同对比结果根据此过滤项列表进行过滤展示。<br>注：</p><ul><li>参数不传，默认根据该用户的过滤项配置进行展示。</li><li>参数传空数组，不过滤合同对比结果。</li><li>参数传过滤项列表，根据过滤项列表对合同对比结果进行过滤展示。</li></ul>
 * @method void setFormatConfigs(FormatConfigs $FormatConfigs) 设置<p>过滤项列表，获取合同对比结果根据此过滤项列表进行过滤展示。<br>注：</p><ul><li>参数不传，默认根据该用户的过滤项配置进行展示。</li><li>参数传空数组，不过滤合同对比结果。</li><li>参数传过滤项列表，根据过滤项列表对合同对比结果进行过滤展示。</li></ul>
 */
class DescribeContractDiffTaskWebUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。使用此接口时，必须填写userId。</p><p>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>合同对比任务ID，该参数通过调用接口<a href="https://qian.tencent.com/developers/companyApis/embedPages/CreateContractDiffTaskWebUrl" target="_blank">创建合同对比web页面</a>获取。</p>
     */
    public $TaskId;

    /**
     * @var FormatConfigs <p>过滤项列表，获取合同对比结果根据此过滤项列表进行过滤展示。<br>注：</p><ul><li>参数不传，默认根据该用户的过滤项配置进行展示。</li><li>参数传空数组，不过滤合同对比结果。</li><li>参数传过滤项列表，根据过滤项列表对合同对比结果进行过滤展示。</li></ul>
     */
    public $FormatConfigs;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。使用此接口时，必须填写userId。</p><p>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $TaskId <p>合同对比任务ID，该参数通过调用接口<a href="https://qian.tencent.com/developers/companyApis/embedPages/CreateContractDiffTaskWebUrl" target="_blank">创建合同对比web页面</a>获取。</p>
     * @param FormatConfigs $FormatConfigs <p>过滤项列表，获取合同对比结果根据此过滤项列表进行过滤展示。<br>注：</p><ul><li>参数不传，默认根据该用户的过滤项配置进行展示。</li><li>参数传空数组，不过滤合同对比结果。</li><li>参数传过滤项列表，根据过滤项列表对合同对比结果进行过滤展示。</li></ul>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("FormatConfigs",$param) and $param["FormatConfigs"] !== null) {
            $this->FormatConfigs = new FormatConfigs();
            $this->FormatConfigs->deserialize($param["FormatConfigs"]);
        }
    }
}
