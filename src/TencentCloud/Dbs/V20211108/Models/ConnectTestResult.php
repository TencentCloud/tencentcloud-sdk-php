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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 连通性检测结果
 *
 * @method integer getTaskId() 获取<p>任务 ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>任务 ID</p>
 * @method string getStatus() 获取<p>任务状态</p>
 * @method void setStatus(string $Status) 设置<p>任务状态</p>
 * @method integer getIsPass() 获取<p>是否通过。0 表示未通过，1 表示通过。</p>
 * @method void setIsPass(integer $IsPass) 设置<p>是否通过。0 表示未通过，1 表示通过。</p>
 * @method string getAddr() 获取<p>源端地址</p>
 * @method void setAddr(string $Addr) 设置<p>源端地址</p>
 * @method string getSNatIp() 获取<p>源地址转换IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSNatIp(string $SNatIp) 设置<p>源地址转换IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTestItems() 获取<p>检测结果集</p>
 * @method void setTestItems(array $TestItems) 设置<p>检测结果集</p>
 */
class ConnectTestResult extends AbstractModel
{
    /**
     * @var integer <p>任务 ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务状态</p>
     */
    public $Status;

    /**
     * @var integer <p>是否通过。0 表示未通过，1 表示通过。</p>
     */
    public $IsPass;

    /**
     * @var string <p>源端地址</p>
     */
    public $Addr;

    /**
     * @var string <p>源地址转换IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SNatIp;

    /**
     * @var array <p>检测结果集</p>
     */
    public $TestItems;

    /**
     * @param integer $TaskId <p>任务 ID</p>
     * @param string $Status <p>任务状态</p>
     * @param integer $IsPass <p>是否通过。0 表示未通过，1 表示通过。</p>
     * @param string $Addr <p>源端地址</p>
     * @param string $SNatIp <p>源地址转换IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TestItems <p>检测结果集</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsPass",$param) and $param["IsPass"] !== null) {
            $this->IsPass = $param["IsPass"];
        }

        if (array_key_exists("Addr",$param) and $param["Addr"] !== null) {
            $this->Addr = $param["Addr"];
        }

        if (array_key_exists("SNatIp",$param) and $param["SNatIp"] !== null) {
            $this->SNatIp = $param["SNatIp"];
        }

        if (array_key_exists("TestItems",$param) and $param["TestItems"] !== null) {
            $this->TestItems = [];
            foreach ($param["TestItems"] as $key => $value){
                $obj = new TestItem();
                $obj->deserialize($value);
                array_push($this->TestItems, $obj);
            }
        }
    }
}
