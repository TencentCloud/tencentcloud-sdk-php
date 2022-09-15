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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述一个第三方组件的源信息。
 *
 * @method PURL getPURL() 获取第三方组件的PURL
 * @method void setPURL(PURL $PURL) 设置第三方组件的PURL
 * @method string getHomepage() 获取第三方组件的主页
 * @method void setHomepage(string $Homepage) 设置第三方组件的主页
 * @method string getSummary() 获取第三方组件的简介
 * @method void setSummary(string $Summary) 设置第三方组件的简介
 * @method array getNicknameList() 获取第三方组件的别名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNicknameList(array $NicknameList) 设置第三方组件的别名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCodeLocationList() 获取第三方组件的代码位置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeLocationList(array $CodeLocationList) 设置第三方组件的代码位置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLicenseExpression() 获取第三方组件的许可证表达式
 * @method void setLicenseExpression(string $LicenseExpression) 设置第三方组件的许可证表达式
 */
class Component extends AbstractModel
{
    /**
     * @var PURL 第三方组件的PURL
     */
    public $PURL;

    /**
     * @var string 第三方组件的主页
     */
    public $Homepage;

    /**
     * @var string 第三方组件的简介
     */
    public $Summary;

    /**
     * @var array 第三方组件的别名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NicknameList;

    /**
     * @var array 第三方组件的代码位置列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeLocationList;

    /**
     * @var string 第三方组件的许可证表达式
     */
    public $LicenseExpression;

    /**
     * @param PURL $PURL 第三方组件的PURL
     * @param string $Homepage 第三方组件的主页
     * @param string $Summary 第三方组件的简介
     * @param array $NicknameList 第三方组件的别名列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CodeLocationList 第三方组件的代码位置列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LicenseExpression 第三方组件的许可证表达式
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
        if (array_key_exists("PURL",$param) and $param["PURL"] !== null) {
            $this->PURL = new PURL();
            $this->PURL->deserialize($param["PURL"]);
        }

        if (array_key_exists("Homepage",$param) and $param["Homepage"] !== null) {
            $this->Homepage = $param["Homepage"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("NicknameList",$param) and $param["NicknameList"] !== null) {
            $this->NicknameList = $param["NicknameList"];
        }

        if (array_key_exists("CodeLocationList",$param) and $param["CodeLocationList"] !== null) {
            $this->CodeLocationList = $param["CodeLocationList"];
        }

        if (array_key_exists("LicenseExpression",$param) and $param["LicenseExpression"] !== null) {
            $this->LicenseExpression = $param["LicenseExpression"];
        }
    }
}
