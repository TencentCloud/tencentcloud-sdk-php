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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApp返回参数结构体
 *
 * @method string getAppBizId() 获取应用 ID
 * @method void setAppBizId(string $AppBizId) 设置应用 ID
 * @method string getAppType() 获取应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
 * @method void setAppType(string $AppType) 设置应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
 * @method string getAppTypeDesc() 获取应用类型说明
 * @method void setAppTypeDesc(string $AppTypeDesc) 设置应用类型说明
 * @method BaseConfig getBaseConfig() 获取应用类型说明
 * @method void setBaseConfig(BaseConfig $BaseConfig) 设置应用类型说明
 * @method AppConfig getAppConfig() 获取应用配置
 * @method void setAppConfig(AppConfig $AppConfig) 设置应用配置
 * @method boolean getAvatarInAppeal() 获取头像是否在申诉中
 * @method void setAvatarInAppeal(boolean $AvatarInAppeal) 设置头像是否在申诉中
 * @method boolean getRoleInAppeal() 获取角色描述是否在申诉中
 * @method void setRoleInAppeal(boolean $RoleInAppeal) 设置角色描述是否在申诉中
 * @method boolean getNameInAppeal() 获取名称是否在申诉中
 * @method void setNameInAppeal(boolean $NameInAppeal) 设置名称是否在申诉中
 * @method boolean getGreetingInAppeal() 获取欢迎语是否在申诉中
 * @method void setGreetingInAppeal(boolean $GreetingInAppeal) 设置欢迎语是否在申诉中
 * @method boolean getBareAnswerInAppeal() 获取未知问题回复语是否在申诉中
 * @method void setBareAnswerInAppeal(boolean $BareAnswerInAppeal) 设置未知问题回复语是否在申诉中
 * @method string getAppKey() 获取应用appKey
 * @method void setAppKey(string $AppKey) 设置应用appKey
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAppResponse extends AbstractModel
{
    /**
     * @var string 应用 ID
     */
    public $AppBizId;

    /**
     * @var string 应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
     */
    public $AppType;

    /**
     * @var string 应用类型说明
     */
    public $AppTypeDesc;

    /**
     * @var BaseConfig 应用类型说明
     */
    public $BaseConfig;

    /**
     * @var AppConfig 应用配置
     */
    public $AppConfig;

    /**
     * @var boolean 头像是否在申诉中
     */
    public $AvatarInAppeal;

    /**
     * @var boolean 角色描述是否在申诉中
     */
    public $RoleInAppeal;

    /**
     * @var boolean 名称是否在申诉中
     */
    public $NameInAppeal;

    /**
     * @var boolean 欢迎语是否在申诉中
     */
    public $GreetingInAppeal;

    /**
     * @var boolean 未知问题回复语是否在申诉中
     */
    public $BareAnswerInAppeal;

    /**
     * @var string 应用appKey
     */
    public $AppKey;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AppBizId 应用 ID
     * @param string $AppType 应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
     * @param string $AppTypeDesc 应用类型说明
     * @param BaseConfig $BaseConfig 应用类型说明
     * @param AppConfig $AppConfig 应用配置
     * @param boolean $AvatarInAppeal 头像是否在申诉中
     * @param boolean $RoleInAppeal 角色描述是否在申诉中
     * @param boolean $NameInAppeal 名称是否在申诉中
     * @param boolean $GreetingInAppeal 欢迎语是否在申诉中
     * @param boolean $BareAnswerInAppeal 未知问题回复语是否在申诉中
     * @param string $AppKey 应用appKey
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
        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("AppTypeDesc",$param) and $param["AppTypeDesc"] !== null) {
            $this->AppTypeDesc = $param["AppTypeDesc"];
        }

        if (array_key_exists("BaseConfig",$param) and $param["BaseConfig"] !== null) {
            $this->BaseConfig = new BaseConfig();
            $this->BaseConfig->deserialize($param["BaseConfig"]);
        }

        if (array_key_exists("AppConfig",$param) and $param["AppConfig"] !== null) {
            $this->AppConfig = new AppConfig();
            $this->AppConfig->deserialize($param["AppConfig"]);
        }

        if (array_key_exists("AvatarInAppeal",$param) and $param["AvatarInAppeal"] !== null) {
            $this->AvatarInAppeal = $param["AvatarInAppeal"];
        }

        if (array_key_exists("RoleInAppeal",$param) and $param["RoleInAppeal"] !== null) {
            $this->RoleInAppeal = $param["RoleInAppeal"];
        }

        if (array_key_exists("NameInAppeal",$param) and $param["NameInAppeal"] !== null) {
            $this->NameInAppeal = $param["NameInAppeal"];
        }

        if (array_key_exists("GreetingInAppeal",$param) and $param["GreetingInAppeal"] !== null) {
            $this->GreetingInAppeal = $param["GreetingInAppeal"];
        }

        if (array_key_exists("BareAnswerInAppeal",$param) and $param["BareAnswerInAppeal"] !== null) {
            $this->BareAnswerInAppeal = $param["BareAnswerInAppeal"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
