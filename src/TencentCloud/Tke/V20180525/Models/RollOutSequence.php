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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发布序列
 *
 * @method string getName() 获取发布序列名称
 * @method void setName(string $Name) 设置发布序列名称
 * @method array getSequenceFlows() 获取发布序列步骤
 * @method void setSequenceFlows(array $SequenceFlows) 设置发布序列步骤
 * @method boolean getEnabled() 获取是否启用
 * @method void setEnabled(boolean $Enabled) 设置是否启用
 * @method integer getID() 获取发布序列ID
 * @method void setID(integer $ID) 设置发布序列ID
 */
class RollOutSequence extends AbstractModel
{
    /**
     * @var string 发布序列名称
     */
    public $Name;

    /**
     * @var array 发布序列步骤
     */
    public $SequenceFlows;

    /**
     * @var boolean 是否启用
     */
    public $Enabled;

    /**
     * @var integer 发布序列ID
     */
    public $ID;

    /**
     * @param string $Name 发布序列名称
     * @param array $SequenceFlows 发布序列步骤
     * @param boolean $Enabled 是否启用
     * @param integer $ID 发布序列ID
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

        if (array_key_exists("SequenceFlows",$param) and $param["SequenceFlows"] !== null) {
            $this->SequenceFlows = [];
            foreach ($param["SequenceFlows"] as $key => $value){
                $obj = new SequenceFlow();
                $obj->deserialize($value);
                array_push($this->SequenceFlows, $obj);
            }
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
