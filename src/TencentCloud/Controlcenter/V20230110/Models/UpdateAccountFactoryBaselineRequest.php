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
namespace TencentCloud\Controlcenter\V20230110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAccountFactoryBaseline请求参数结构体
 *
 * @method string getName() 获取基线名称，基线名字唯一，仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-25个中文或英文字符。
 * @method void setName(string $Name) 设置基线名称，基线名字唯一，仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-25个中文或英文字符。
 * @method array getBaselineConfigItems() 获取基线配置，覆盖更新。可以通过controlcenter:GetAccountFactoryBaseline查询现有基线配置。可以通过controlcenter:ListAccountFactoryBaselineItems查询支持的基线列表。
 * @method void setBaselineConfigItems(array $BaselineConfigItems) 设置基线配置，覆盖更新。可以通过controlcenter:GetAccountFactoryBaseline查询现有基线配置。可以通过controlcenter:ListAccountFactoryBaselineItems查询支持的基线列表。
 */
class UpdateAccountFactoryBaselineRequest extends AbstractModel
{
    /**
     * @var string 基线名称，基线名字唯一，仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-25个中文或英文字符。
     */
    public $Name;

    /**
     * @var array 基线配置，覆盖更新。可以通过controlcenter:GetAccountFactoryBaseline查询现有基线配置。可以通过controlcenter:ListAccountFactoryBaselineItems查询支持的基线列表。
     */
    public $BaselineConfigItems;

    /**
     * @param string $Name 基线名称，基线名字唯一，仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-25个中文或英文字符。
     * @param array $BaselineConfigItems 基线配置，覆盖更新。可以通过controlcenter:GetAccountFactoryBaseline查询现有基线配置。可以通过controlcenter:ListAccountFactoryBaselineItems查询支持的基线列表。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BaselineConfigItems",$param) and $param["BaselineConfigItems"] !== null) {
            $this->BaselineConfigItems = [];
            foreach ($param["BaselineConfigItems"] as $key => $value){
                $obj = new BaselineConfigItem();
                $obj->deserialize($value);
                array_push($this->BaselineConfigItems, $obj);
            }
        }
    }
}
