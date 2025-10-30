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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询某个指定SCP策略关联的目标列表
 *
 * @method integer getUin() 获取scp账号uin或节点Id
 * @method void setUin(integer $Uin) 设置scp账号uin或节点Id
 * @method integer getRelatedType() 获取关联类型 1-节点关联 2-用户关联
 * @method void setRelatedType(integer $RelatedType) 设置关联类型 1-节点关联 2-用户关联
 * @method string getName() 获取账号或者节点名称
 * @method void setName(string $Name) 设置账号或者节点名称
 * @method string getAddTime() 获取绑定时间
 * @method void setAddTime(string $AddTime) 设置绑定时间
 */
class ListTargetsForPolicyNode extends AbstractModel
{
    /**
     * @var integer scp账号uin或节点Id
     */
    public $Uin;

    /**
     * @var integer 关联类型 1-节点关联 2-用户关联
     */
    public $RelatedType;

    /**
     * @var string 账号或者节点名称
     */
    public $Name;

    /**
     * @var string 绑定时间
     */
    public $AddTime;

    /**
     * @param integer $Uin scp账号uin或节点Id
     * @param integer $RelatedType 关联类型 1-节点关联 2-用户关联
     * @param string $Name 账号或者节点名称
     * @param string $AddTime 绑定时间
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("RelatedType",$param) and $param["RelatedType"] !== null) {
            $this->RelatedType = $param["RelatedType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }
    }
}
