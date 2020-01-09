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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getAgentGroupId() 获取拨测分组id，体现本拨测任务要采用那些运营商作为拨测源。一般可直接填写本用户的默认拨测分组。参见：DescribeAgentGroupList 接口，本参数使用返回结果里的groupId的值。
 * @method void setAgentGroupId(integer $AgentGroupId) 设置拨测分组id，体现本拨测任务要采用那些运营商作为拨测源。一般可直接填写本用户的默认拨测分组。参见：DescribeAgentGroupList 接口，本参数使用返回结果里的groupId的值。
 * @method string getCatTypeName() 获取http, https, ping, tcp 之一
 * @method void setCatTypeName(string $CatTypeName) 设置http, https, ping, tcp 之一
 * @method string getUrl() 获取拨测的url  例如：www.baidu.com (url域名解析需要能解析出具体的ip)
 * @method void setUrl(string $Url) 设置拨测的url  例如：www.baidu.com (url域名解析需要能解析出具体的ip)
 * @method string getTaskName() 获取拨测任务名称不能超过32个字符。同一个用户创建的任务名不可重复
 * @method void setTaskName(string $TaskName) 设置拨测任务名称不能超过32个字符。同一个用户创建的任务名不可重复
 * @method string getHost() 获取需要满足ip 的格式
 * @method void setHost(string $Host) 设置需要满足ip 的格式
 * @method integer getPort() 获取服务端监听或接收数据的端口
 * @method void setPort(integer $Port) 设置服务端监听或接收数据的端口
 * @method integer getIsHeader() 获取是否为Header请求（非0 发起Header 请求。为0，且PostData 非空，发起POST请求。为0，PostData 为空，发起GET请求）
 * @method void setIsHeader(integer $IsHeader) 设置是否为Header请求（非0 发起Header 请求。为0，且PostData 非空，发起POST请求。为0，PostData 为空，发起GET请求）
 * @method string getSslVer() 获取url中含有https时有用。缺省为SSLv23。需要为 TLSv1_2, TLSv1_1, TLSv1, SSLv2, SSLv23, SSLv3 之一
 * @method void setSslVer(string $SslVer) 设置url中含有https时有用。缺省为SSLv23。需要为 TLSv1_2, TLSv1_1, TLSv1, SSLv2, SSLv23, SSLv3 之一
 * @method string getPostData() 获取POST 请求数据。空字符串表示非POST请求
 * @method void setPostData(string $PostData) 设置POST 请求数据。空字符串表示非POST请求
 * @method string getUserAgent() 获取用户agent 信息
 * @method void setUserAgent(string $UserAgent) 设置用户agent 信息
 * @method string getCheckStr() 获取要在结果中进行匹配的字符串
 * @method void setCheckStr(string $CheckStr) 设置要在结果中进行匹配的字符串
 * @method integer getCheckType() 获取1 表示通过检查结果是否包含CheckStr 进行校验
 * @method void setCheckType(integer $CheckType) 设置1 表示通过检查结果是否包含CheckStr 进行校验
 * @method string getCookie() 获取需要设置的cookie信息
 * @method void setCookie(string $Cookie) 设置需要设置的cookie信息
 * @method integer getPeriod() 获取拨测周期。取值可为1,5,15,30之一, 单位：分钟。精度不能低于用户等级规定的最小精度
 * @method void setPeriod(integer $Period) 设置拨测周期。取值可为1,5,15,30之一, 单位：分钟。精度不能低于用户等级规定的最小精度
 * @method integer getTaskId() 获取任务号。用于验证且修改任务时传入原任务号
 * @method void setTaskId(integer $TaskId) 设置任务号。用于验证且修改任务时传入原任务号
 */

/**
 *CreateTask请求参数结构体
 */
class CreateTaskRequest extends AbstractModel
{
    /**
     * @var integer 拨测分组id，体现本拨测任务要采用那些运营商作为拨测源。一般可直接填写本用户的默认拨测分组。参见：DescribeAgentGroupList 接口，本参数使用返回结果里的groupId的值。
     */
    public $AgentGroupId;

    /**
     * @var string http, https, ping, tcp 之一
     */
    public $CatTypeName;

    /**
     * @var string 拨测的url  例如：www.baidu.com (url域名解析需要能解析出具体的ip)
     */
    public $Url;

    /**
     * @var string 拨测任务名称不能超过32个字符。同一个用户创建的任务名不可重复
     */
    public $TaskName;

    /**
     * @var string 需要满足ip 的格式
     */
    public $Host;

    /**
     * @var integer 服务端监听或接收数据的端口
     */
    public $Port;

    /**
     * @var integer 是否为Header请求（非0 发起Header 请求。为0，且PostData 非空，发起POST请求。为0，PostData 为空，发起GET请求）
     */
    public $IsHeader;

    /**
     * @var string url中含有https时有用。缺省为SSLv23。需要为 TLSv1_2, TLSv1_1, TLSv1, SSLv2, SSLv23, SSLv3 之一
     */
    public $SslVer;

    /**
     * @var string POST 请求数据。空字符串表示非POST请求
     */
    public $PostData;

    /**
     * @var string 用户agent 信息
     */
    public $UserAgent;

    /**
     * @var string 要在结果中进行匹配的字符串
     */
    public $CheckStr;

    /**
     * @var integer 1 表示通过检查结果是否包含CheckStr 进行校验
     */
    public $CheckType;

    /**
     * @var string 需要设置的cookie信息
     */
    public $Cookie;

    /**
     * @var integer 拨测周期。取值可为1,5,15,30之一, 单位：分钟。精度不能低于用户等级规定的最小精度
     */
    public $Period;

    /**
     * @var integer 任务号。用于验证且修改任务时传入原任务号
     */
    public $TaskId;
    /**
     * @param integer $AgentGroupId 拨测分组id，体现本拨测任务要采用那些运营商作为拨测源。一般可直接填写本用户的默认拨测分组。参见：DescribeAgentGroupList 接口，本参数使用返回结果里的groupId的值。
     * @param string $CatTypeName http, https, ping, tcp 之一
     * @param string $Url 拨测的url  例如：www.baidu.com (url域名解析需要能解析出具体的ip)
     * @param string $TaskName 拨测任务名称不能超过32个字符。同一个用户创建的任务名不可重复
     * @param string $Host 需要满足ip 的格式
     * @param integer $Port 服务端监听或接收数据的端口
     * @param integer $IsHeader 是否为Header请求（非0 发起Header 请求。为0，且PostData 非空，发起POST请求。为0，PostData 为空，发起GET请求）
     * @param string $SslVer url中含有https时有用。缺省为SSLv23。需要为 TLSv1_2, TLSv1_1, TLSv1, SSLv2, SSLv23, SSLv3 之一
     * @param string $PostData POST 请求数据。空字符串表示非POST请求
     * @param string $UserAgent 用户agent 信息
     * @param string $CheckStr 要在结果中进行匹配的字符串
     * @param integer $CheckType 1 表示通过检查结果是否包含CheckStr 进行校验
     * @param string $Cookie 需要设置的cookie信息
     * @param integer $Period 拨测周期。取值可为1,5,15,30之一, 单位：分钟。精度不能低于用户等级规定的最小精度
     * @param integer $TaskId 任务号。用于验证且修改任务时传入原任务号
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
        if (array_key_exists("AgentGroupId",$param) and $param["AgentGroupId"] !== null) {
            $this->AgentGroupId = $param["AgentGroupId"];
        }

        if (array_key_exists("CatTypeName",$param) and $param["CatTypeName"] !== null) {
            $this->CatTypeName = $param["CatTypeName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("IsHeader",$param) and $param["IsHeader"] !== null) {
            $this->IsHeader = $param["IsHeader"];
        }

        if (array_key_exists("SslVer",$param) and $param["SslVer"] !== null) {
            $this->SslVer = $param["SslVer"];
        }

        if (array_key_exists("PostData",$param) and $param["PostData"] !== null) {
            $this->PostData = $param["PostData"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("CheckStr",$param) and $param["CheckStr"] !== null) {
            $this->CheckStr = $param["CheckStr"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = $param["Cookie"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
