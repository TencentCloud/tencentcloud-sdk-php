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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 变配类型查询出参
 *
 * @method integer getModifyType() 获取变配类型
 * @method void setModifyType(integer $ModifyType) 设置变配类型
 * @method boolean getMigrateFlag() 获取是否迁移标志
 * @method void setMigrateFlag(boolean $MigrateFlag) 设置是否迁移标志
 */
class DescModifyType extends AbstractModel
{
    /**
     * @var integer 变配类型
     */
    public $ModifyType;

    /**
     * @var boolean 是否迁移标志
     */
    public $MigrateFlag;

    /**
     * @param integer $ModifyType 变配类型
     * @param boolean $MigrateFlag 是否迁移标志
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
        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("MigrateFlag",$param) and $param["MigrateFlag"] !== null) {
            $this->MigrateFlag = $param["MigrateFlag"];
        }
    }
}
