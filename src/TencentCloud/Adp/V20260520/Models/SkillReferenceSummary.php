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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引用摘要（用于详情页展示，对应DB t_skill_reference）
 *
 * @method string getReferenceId() 获取<p>关联ID</p>
 * @method void setReferenceId(string $ReferenceId) 设置<p>关联ID</p>
 * @method string getReferenceName() 获取<p>关联名称</p>
 * @method void setReferenceName(string $ReferenceName) 设置<p>关联名称</p>
 * @method integer getReferenceType() 获取<p>关联类型</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | 占位 |<br>| 1 | ClawPro |<br>| 2 | agent |</p>
 * @method void setReferenceType(integer $ReferenceType) 设置<p>关联类型</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | 占位 |<br>| 1 | ClawPro |<br>| 2 | agent |</p>
 * @method string getSpaceId() 获取<p>空间ID</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间ID</p>
 * @method string getSpaceName() 获取<p>空间名称</p>
 * @method void setSpaceName(string $SpaceName) 设置<p>空间名称</p>
 * @method string getOwner() 获取<p>Reference实例拥有者</p>
 * @method void setOwner(string $Owner) 设置<p>Reference实例拥有者</p>
 */
class SkillReferenceSummary extends AbstractModel
{
    /**
     * @var string <p>关联ID</p>
     */
    public $ReferenceId;

    /**
     * @var string <p>关联名称</p>
     */
    public $ReferenceName;

    /**
     * @var integer <p>关联类型</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | 占位 |<br>| 1 | ClawPro |<br>| 2 | agent |</p>
     */
    public $ReferenceType;

    /**
     * @var string <p>空间ID</p>
     */
    public $SpaceId;

    /**
     * @var string <p>空间名称</p>
     */
    public $SpaceName;

    /**
     * @var string <p>Reference实例拥有者</p>
     */
    public $Owner;

    /**
     * @param string $ReferenceId <p>关联ID</p>
     * @param string $ReferenceName <p>关联名称</p>
     * @param integer $ReferenceType <p>关联类型</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | 占位 |<br>| 1 | ClawPro |<br>| 2 | agent |</p>
     * @param string $SpaceId <p>空间ID</p>
     * @param string $SpaceName <p>空间名称</p>
     * @param string $Owner <p>Reference实例拥有者</p>
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
        if (array_key_exists("ReferenceId",$param) and $param["ReferenceId"] !== null) {
            $this->ReferenceId = $param["ReferenceId"];
        }

        if (array_key_exists("ReferenceName",$param) and $param["ReferenceName"] !== null) {
            $this->ReferenceName = $param["ReferenceName"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("SpaceName",$param) and $param["SpaceName"] !== null) {
            $this->SpaceName = $param["SpaceName"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }
    }
}
