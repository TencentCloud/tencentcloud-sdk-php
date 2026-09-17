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
 * @method integer getUin() 获取<p>scp账号uin或节点Id</p>
 * @method void setUin(integer $Uin) 设置<p>scp账号uin或节点Id</p>
 * @method integer getRelatedType() 获取<p>关联类型 1-节点关联 2-用户关联</p>
 * @method void setRelatedType(integer $RelatedType) 设置<p>关联类型 1-节点关联 2-用户关联</p>
 * @method string getName() 获取<p>账号或者节点名称</p>
 * @method void setName(string $Name) 设置<p>账号或者节点名称</p>
 * @method string getAddTime() 获取<p>绑定时间</p>
 * @method void setAddTime(string $AddTime) 设置<p>绑定时间</p>
 * @method array getNodePath() 获取<p>目标对象所属的组织层级名称路径</p>
 * @method void setNodePath(array $NodePath) 设置<p>目标对象所属的组织层级名称路径</p>
 * @method array getNodePathIds() 获取<p>对应的组织层级 ID 路径</p>
 * @method void setNodePathIds(array $NodePathIds) 设置<p>对应的组织层级 ID 路径</p>
 */
class ListTargetsForPolicyNode extends AbstractModel
{
    /**
     * @var integer <p>scp账号uin或节点Id</p>
     */
    public $Uin;

    /**
     * @var integer <p>关联类型 1-节点关联 2-用户关联</p>
     */
    public $RelatedType;

    /**
     * @var string <p>账号或者节点名称</p>
     */
    public $Name;

    /**
     * @var string <p>绑定时间</p>
     */
    public $AddTime;

    /**
     * @var array <p>目标对象所属的组织层级名称路径</p>
     */
    public $NodePath;

    /**
     * @var array <p>对应的组织层级 ID 路径</p>
     */
    public $NodePathIds;

    /**
     * @param integer $Uin <p>scp账号uin或节点Id</p>
     * @param integer $RelatedType <p>关联类型 1-节点关联 2-用户关联</p>
     * @param string $Name <p>账号或者节点名称</p>
     * @param string $AddTime <p>绑定时间</p>
     * @param array $NodePath <p>目标对象所属的组织层级名称路径</p>
     * @param array $NodePathIds <p>对应的组织层级 ID 路径</p>
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

        if (array_key_exists("NodePath",$param) and $param["NodePath"] !== null) {
            $this->NodePath = $param["NodePath"];
        }

        if (array_key_exists("NodePathIds",$param) and $param["NodePathIds"] !== null) {
            $this->NodePathIds = $param["NodePathIds"];
        }
    }
}
