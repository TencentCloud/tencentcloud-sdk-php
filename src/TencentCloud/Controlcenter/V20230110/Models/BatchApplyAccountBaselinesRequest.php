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
 * BatchApplyAccountBaselines请求参数结构体
 *
 * @method array getMemberUinList() 获取成员账号uin，也是被应用基线的账号uin。
 * @method void setMemberUinList(array $MemberUinList) 设置成员账号uin，也是被应用基线的账号uin。
 * @method array getBaselineConfigItems() 获取基线项配置信息列表。
 * @method void setBaselineConfigItems(array $BaselineConfigItems) 设置基线项配置信息列表。
 */
class BatchApplyAccountBaselinesRequest extends AbstractModel
{
    /**
     * @var array 成员账号uin，也是被应用基线的账号uin。
     */
    public $MemberUinList;

    /**
     * @var array 基线项配置信息列表。
     */
    public $BaselineConfigItems;

    /**
     * @param array $MemberUinList 成员账号uin，也是被应用基线的账号uin。
     * @param array $BaselineConfigItems 基线项配置信息列表。
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
        if (array_key_exists("MemberUinList",$param) and $param["MemberUinList"] !== null) {
            $this->MemberUinList = $param["MemberUinList"];
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
