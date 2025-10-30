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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePublicConfigWithDetailResp请求参数结构体
 *
 * @method string getConfigName() 获取配置项名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”、“_”），且不能以分隔符开头或结尾。
 * @method void setConfigName(string $ConfigName) 设置配置项名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”、“_”），且不能以分隔符开头或结尾。
 * @method string getConfigVersion() 获取配置项版本，最多支持60个字符，只能包含小写字母、数字及分隔符("-",".")，且必须以小写字母或数字开头、以小写字母或数字结尾，中间不能有连续的"-"或"."。
 * @method void setConfigVersion(string $ConfigVersion) 设置配置项版本，最多支持60个字符，只能包含小写字母、数字及分隔符("-",".")，且必须以小写字母或数字开头、以小写字母或数字结尾，中间不能有连续的"-"或"."。
 * @method string getConfigValue() 获取配置项值，总是接收yaml格式的内容。
 * @method void setConfigValue(string $ConfigValue) 设置配置项值，总是接收yaml格式的内容。
 * @method string getConfigVersionDesc() 获取配置项版本描述，最多支持200个字符。
 * @method void setConfigVersionDesc(string $ConfigVersionDesc) 设置配置项版本描述，最多支持200个字符。
 * @method string getConfigType() 获取配置项类型，固定值。
 * @method void setConfigType(string $ConfigType) 设置配置项类型，固定值。
 * @method boolean getEncodeWithBase64() 获取Base64编码的配置项。
- true：开启
- false：关闭
 * @method void setEncodeWithBase64(boolean $EncodeWithBase64) 设置Base64编码的配置项。
- true：开启
- false：关闭
 * @method array getProgramIdList() 获取需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
 * @method void setProgramIdList(array $ProgramIdList) 设置需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
 */
class CreatePublicConfigWithDetailRespRequest extends AbstractModel
{
    /**
     * @var string 配置项名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”、“_”），且不能以分隔符开头或结尾。
     */
    public $ConfigName;

    /**
     * @var string 配置项版本，最多支持60个字符，只能包含小写字母、数字及分隔符("-",".")，且必须以小写字母或数字开头、以小写字母或数字结尾，中间不能有连续的"-"或"."。
     */
    public $ConfigVersion;

    /**
     * @var string 配置项值，总是接收yaml格式的内容。
     */
    public $ConfigValue;

    /**
     * @var string 配置项版本描述，最多支持200个字符。
     */
    public $ConfigVersionDesc;

    /**
     * @var string 配置项类型，固定值。
     */
    public $ConfigType;

    /**
     * @var boolean Base64编码的配置项。
- true：开启
- false：关闭
     */
    public $EncodeWithBase64;

    /**
     * @var array 需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
     */
    public $ProgramIdList;

    /**
     * @param string $ConfigName 配置项名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”、“_”），且不能以分隔符开头或结尾。
     * @param string $ConfigVersion 配置项版本，最多支持60个字符，只能包含小写字母、数字及分隔符("-",".")，且必须以小写字母或数字开头、以小写字母或数字结尾，中间不能有连续的"-"或"."。
     * @param string $ConfigValue 配置项值，总是接收yaml格式的内容。
     * @param string $ConfigVersionDesc 配置项版本描述，最多支持200个字符。
     * @param string $ConfigType 配置项类型，固定值。
     * @param boolean $EncodeWithBase64 Base64编码的配置项。
- true：开启
- false：关闭
     * @param array $ProgramIdList 需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
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
        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigVersion",$param) and $param["ConfigVersion"] !== null) {
            $this->ConfigVersion = $param["ConfigVersion"];
        }

        if (array_key_exists("ConfigValue",$param) and $param["ConfigValue"] !== null) {
            $this->ConfigValue = $param["ConfigValue"];
        }

        if (array_key_exists("ConfigVersionDesc",$param) and $param["ConfigVersionDesc"] !== null) {
            $this->ConfigVersionDesc = $param["ConfigVersionDesc"];
        }

        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("EncodeWithBase64",$param) and $param["EncodeWithBase64"] !== null) {
            $this->EncodeWithBase64 = $param["EncodeWithBase64"];
        }

        if (array_key_exists("ProgramIdList",$param) and $param["ProgramIdList"] !== null) {
            $this->ProgramIdList = $param["ProgramIdList"];
        }
    }
}
