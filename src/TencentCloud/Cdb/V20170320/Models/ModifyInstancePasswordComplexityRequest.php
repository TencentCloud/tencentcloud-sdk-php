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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancePasswordComplexity请求参数结构体
 *
 * @method array getInstanceIds() 获取要修改密码复杂度的实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
说明：支持输入多个实例 ID 进行修改。
 * @method void setInstanceIds(array $InstanceIds) 设置要修改密码复杂度的实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
说明：支持输入多个实例 ID 进行修改。
 * @method array getParamList() 获取要修改的密码复杂度的选项。每一个选项是以组合形式写入的，一个组合包括 Name 和 CurrentValue，其中 Name 表示对应选项的参数名，CurrentValue 表示参数值。例如：[{"Name": "validate_password.length", "CurrentValue": "10"}]，表示将密码的最小字符数修改为10。
说明：不同数据库版本的实例，支持修改的密码复杂度的选项如下。
1. MySQL 8.0：
选项 validate_password.policy，表示密码复杂度的开关，值为 LOW 时表示关闭；值为 MEDIUM 时表示开启。
选项 validate_password.length，表示密码总长度的最小字符数。
选项 validate_password.mixed_case_count，表示小写和大写字母的最小字符数。
选项 validate_password.number_count，表示数字的最小字符数。
选项 validate_password.special_char_count，表示特殊字符的最小字符数。
2. MySQL 5.6、MySQL 5.7：
选项 validate_password_policy，表示密码复杂度的开关，值为 LOW 时表示关闭；值为 MEDIUM 时表示开启。
选项 validate_password_length，表示密码总长度的最小字符数。
选项 validate_password_mixed_case_count，表示小写和大写字母的最小字符数。
选项 validate_password_number_count，表示数字的最小字符数。
选项 validate_password_special_char_count，表示特殊字符的最小字符数。
 * @method void setParamList(array $ParamList) 设置要修改的密码复杂度的选项。每一个选项是以组合形式写入的，一个组合包括 Name 和 CurrentValue，其中 Name 表示对应选项的参数名，CurrentValue 表示参数值。例如：[{"Name": "validate_password.length", "CurrentValue": "10"}]，表示将密码的最小字符数修改为10。
说明：不同数据库版本的实例，支持修改的密码复杂度的选项如下。
1. MySQL 8.0：
选项 validate_password.policy，表示密码复杂度的开关，值为 LOW 时表示关闭；值为 MEDIUM 时表示开启。
选项 validate_password.length，表示密码总长度的最小字符数。
选项 validate_password.mixed_case_count，表示小写和大写字母的最小字符数。
选项 validate_password.number_count，表示数字的最小字符数。
选项 validate_password.special_char_count，表示特殊字符的最小字符数。
2. MySQL 5.6、MySQL 5.7：
选项 validate_password_policy，表示密码复杂度的开关，值为 LOW 时表示关闭；值为 MEDIUM 时表示开启。
选项 validate_password_length，表示密码总长度的最小字符数。
选项 validate_password_mixed_case_count，表示小写和大写字母的最小字符数。
选项 validate_password_number_count，表示数字的最小字符数。
选项 validate_password_special_char_count，表示特殊字符的最小字符数。
 */
class ModifyInstancePasswordComplexityRequest extends AbstractModel
{
    /**
     * @var array 要修改密码复杂度的实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
说明：支持输入多个实例 ID 进行修改。
     */
    public $InstanceIds;

    /**
     * @var array 要修改的密码复杂度的选项。每一个选项是以组合形式写入的，一个组合包括 Name 和 CurrentValue，其中 Name 表示对应选项的参数名，CurrentValue 表示参数值。例如：[{"Name": "validate_password.length", "CurrentValue": "10"}]，表示将密码的最小字符数修改为10。
说明：不同数据库版本的实例，支持修改的密码复杂度的选项如下。
1. MySQL 8.0：
选项 validate_password.policy，表示密码复杂度的开关，值为 LOW 时表示关闭；值为 MEDIUM 时表示开启。
选项 validate_password.length，表示密码总长度的最小字符数。
选项 validate_password.mixed_case_count，表示小写和大写字母的最小字符数。
选项 validate_password.number_count，表示数字的最小字符数。
选项 validate_password.special_char_count，表示特殊字符的最小字符数。
2. MySQL 5.6、MySQL 5.7：
选项 validate_password_policy，表示密码复杂度的开关，值为 LOW 时表示关闭；值为 MEDIUM 时表示开启。
选项 validate_password_length，表示密码总长度的最小字符数。
选项 validate_password_mixed_case_count，表示小写和大写字母的最小字符数。
选项 validate_password_number_count，表示数字的最小字符数。
选项 validate_password_special_char_count，表示特殊字符的最小字符数。
     */
    public $ParamList;

    /**
     * @param array $InstanceIds 要修改密码复杂度的实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
说明：支持输入多个实例 ID 进行修改。
     * @param array $ParamList 要修改的密码复杂度的选项。每一个选项是以组合形式写入的，一个组合包括 Name 和 CurrentValue，其中 Name 表示对应选项的参数名，CurrentValue 表示参数值。例如：[{"Name": "validate_password.length", "CurrentValue": "10"}]，表示将密码的最小字符数修改为10。
说明：不同数据库版本的实例，支持修改的密码复杂度的选项如下。
1. MySQL 8.0：
选项 validate_password.policy，表示密码复杂度的开关，值为 LOW 时表示关闭；值为 MEDIUM 时表示开启。
选项 validate_password.length，表示密码总长度的最小字符数。
选项 validate_password.mixed_case_count，表示小写和大写字母的最小字符数。
选项 validate_password.number_count，表示数字的最小字符数。
选项 validate_password.special_char_count，表示特殊字符的最小字符数。
2. MySQL 5.6、MySQL 5.7：
选项 validate_password_policy，表示密码复杂度的开关，值为 LOW 时表示关闭；值为 MEDIUM 时表示开启。
选项 validate_password_length，表示密码总长度的最小字符数。
选项 validate_password_mixed_case_count，表示小写和大写字母的最小字符数。
选项 validate_password_number_count，表示数字的最小字符数。
选项 validate_password_special_char_count，表示特殊字符的最小字符数。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new Parameter();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
