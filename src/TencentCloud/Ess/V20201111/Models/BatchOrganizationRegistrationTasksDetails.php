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
 * 批量认证企业任务详情信息，其中包括 TaskId，状态信息等。
 *
 * @method string getTaskId() 获取生成注册链接的任务Id
 * @method void setTaskId(string $TaskId) 设置生成注册链接的任务Id
 * @method string getStatus() 获取批量创建企业任务的状态
<ul>
<li>Processing</li>
<li>Create</li>
<li>Submit</li>
<li>Authorization</li>
<li>Failed</li>
</ul>

各个状态所代表的含义如下表格所示：
<table>
<thead align="center" valign="center">
<tr><th>任务状态名称</th><th>任务状态详情</th></tr>
</thead>
<tbody>
<tr><th align="center" valign="center">Processing</th><th>企业认证任务处理中，用户调用了<a href="https://qian.tencent.com/developers/companyApis/organizations/CreateBatchOrganizationRegistrationTasks">CreateBatchOrganizationRegistrationTasks</a>接口，但是任务还在处理中的状态</th></tr>
<tr><th align="center" valign="center">Create</th><th>创建企业认证链接任务完成，可以调用生成任务链接接口</th></tr>
<tr><th align="center" valign="center">Submit</th><th>企业认证任务已提交,到如下界面之后，会变为这个状态

![image](https://qcloudimg.tencent-cloud.cn/raw/acbcec8c7a71de14d9c041e3b8ca8b3f.png)</th></tr>
<tr><th align="center" valign="center">Authorization</th><th>企业认证任务认证成功,点击下图下一步，进入到授权书上传或者法人认证，则会变为这个状态

![image](https://qcloudimg.tencent-cloud.cn/raw/c52448354871cffa729da8db4e3a6f18.png)</th></tr>
<tr><th align="center" valign="center">Failed</th><th>企业认证任务失败</th></tr>
</tbody>
</table>
 * @method void setStatus(string $Status) 设置批量创建企业任务的状态
<ul>
<li>Processing</li>
<li>Create</li>
<li>Submit</li>
<li>Authorization</li>
<li>Failed</li>
</ul>

各个状态所代表的含义如下表格所示：
<table>
<thead align="center" valign="center">
<tr><th>任务状态名称</th><th>任务状态详情</th></tr>
</thead>
<tbody>
<tr><th align="center" valign="center">Processing</th><th>企业认证任务处理中，用户调用了<a href="https://qian.tencent.com/developers/companyApis/organizations/CreateBatchOrganizationRegistrationTasks">CreateBatchOrganizationRegistrationTasks</a>接口，但是任务还在处理中的状态</th></tr>
<tr><th align="center" valign="center">Create</th><th>创建企业认证链接任务完成，可以调用生成任务链接接口</th></tr>
<tr><th align="center" valign="center">Submit</th><th>企业认证任务已提交,到如下界面之后，会变为这个状态

![image](https://qcloudimg.tencent-cloud.cn/raw/acbcec8c7a71de14d9c041e3b8ca8b3f.png)</th></tr>
<tr><th align="center" valign="center">Authorization</th><th>企业认证任务认证成功,点击下图下一步，进入到授权书上传或者法人认证，则会变为这个状态

![image](https://qcloudimg.tencent-cloud.cn/raw/c52448354871cffa729da8db4e3a6f18.png)</th></tr>
<tr><th align="center" valign="center">Failed</th><th>企业认证任务失败</th></tr>
</tbody>
</table>
 * @method string getErrorMessage() 获取如果任务失败,会返回错误信息
 * @method void setErrorMessage(string $ErrorMessage) 设置如果任务失败,会返回错误信息
 */
class BatchOrganizationRegistrationTasksDetails extends AbstractModel
{
    /**
     * @var string 生成注册链接的任务Id
     */
    public $TaskId;

    /**
     * @var string 批量创建企业任务的状态
<ul>
<li>Processing</li>
<li>Create</li>
<li>Submit</li>
<li>Authorization</li>
<li>Failed</li>
</ul>

各个状态所代表的含义如下表格所示：
<table>
<thead align="center" valign="center">
<tr><th>任务状态名称</th><th>任务状态详情</th></tr>
</thead>
<tbody>
<tr><th align="center" valign="center">Processing</th><th>企业认证任务处理中，用户调用了<a href="https://qian.tencent.com/developers/companyApis/organizations/CreateBatchOrganizationRegistrationTasks">CreateBatchOrganizationRegistrationTasks</a>接口，但是任务还在处理中的状态</th></tr>
<tr><th align="center" valign="center">Create</th><th>创建企业认证链接任务完成，可以调用生成任务链接接口</th></tr>
<tr><th align="center" valign="center">Submit</th><th>企业认证任务已提交,到如下界面之后，会变为这个状态

![image](https://qcloudimg.tencent-cloud.cn/raw/acbcec8c7a71de14d9c041e3b8ca8b3f.png)</th></tr>
<tr><th align="center" valign="center">Authorization</th><th>企业认证任务认证成功,点击下图下一步，进入到授权书上传或者法人认证，则会变为这个状态

![image](https://qcloudimg.tencent-cloud.cn/raw/c52448354871cffa729da8db4e3a6f18.png)</th></tr>
<tr><th align="center" valign="center">Failed</th><th>企业认证任务失败</th></tr>
</tbody>
</table>
     */
    public $Status;

    /**
     * @var string 如果任务失败,会返回错误信息
     */
    public $ErrorMessage;

    /**
     * @param string $TaskId 生成注册链接的任务Id
     * @param string $Status 批量创建企业任务的状态
<ul>
<li>Processing</li>
<li>Create</li>
<li>Submit</li>
<li>Authorization</li>
<li>Failed</li>
</ul>

各个状态所代表的含义如下表格所示：
<table>
<thead align="center" valign="center">
<tr><th>任务状态名称</th><th>任务状态详情</th></tr>
</thead>
<tbody>
<tr><th align="center" valign="center">Processing</th><th>企业认证任务处理中，用户调用了<a href="https://qian.tencent.com/developers/companyApis/organizations/CreateBatchOrganizationRegistrationTasks">CreateBatchOrganizationRegistrationTasks</a>接口，但是任务还在处理中的状态</th></tr>
<tr><th align="center" valign="center">Create</th><th>创建企业认证链接任务完成，可以调用生成任务链接接口</th></tr>
<tr><th align="center" valign="center">Submit</th><th>企业认证任务已提交,到如下界面之后，会变为这个状态

![image](https://qcloudimg.tencent-cloud.cn/raw/acbcec8c7a71de14d9c041e3b8ca8b3f.png)</th></tr>
<tr><th align="center" valign="center">Authorization</th><th>企业认证任务认证成功,点击下图下一步，进入到授权书上传或者法人认证，则会变为这个状态

![image](https://qcloudimg.tencent-cloud.cn/raw/c52448354871cffa729da8db4e3a6f18.png)</th></tr>
<tr><th align="center" valign="center">Failed</th><th>企业认证任务失败</th></tr>
</tbody>
</table>
     * @param string $ErrorMessage 如果任务失败,会返回错误信息
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
