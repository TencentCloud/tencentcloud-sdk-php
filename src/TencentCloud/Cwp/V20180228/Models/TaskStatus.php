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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务扫描状态列表
 *
 * @method string getScanning() 获取扫描中（包含初始化）
 * @method void setScanning(string $Scanning) 设置扫描中（包含初始化）
 * @method string getOk() 获取扫描终止（包含终止中）
 * @method void setOk(string $Ok) 设置扫描终止（包含终止中）
 * @method string getFail() 获取扫描失败
 * @method void setFail(string $Fail) 设置扫描失败
 * @method string getStop() 获取扫描失败（提示具体原因：扫描超时、客户端版本低、客户端离线）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStop(string $Stop) 设置扫描失败（提示具体原因：扫描超时、客户端版本低、客户端离线）
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskStatus extends AbstractModel
{
    /**
     * @var string 扫描中（包含初始化）
     */
    public $Scanning;

    /**
     * @var string 扫描终止（包含终止中）
     */
    public $Ok;

    /**
     * @var string 扫描失败
     */
    public $Fail;

    /**
     * @var string 扫描失败（提示具体原因：扫描超时、客户端版本低、客户端离线）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Stop;

    /**
     * @param string $Scanning 扫描中（包含初始化）
     * @param string $Ok 扫描终止（包含终止中）
     * @param string $Fail 扫描失败
     * @param string $Stop 扫描失败（提示具体原因：扫描超时、客户端版本低、客户端离线）
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Scanning",$param) and $param["Scanning"] !== null) {
            $this->Scanning = $param["Scanning"];
        }

        if (array_key_exists("Ok",$param) and $param["Ok"] !== null) {
            $this->Ok = $param["Ok"];
        }

        if (array_key_exists("Fail",$param) and $param["Fail"] !== null) {
            $this->Fail = $param["Fail"];
        }

        if (array_key_exists("Stop",$param) and $param["Stop"] !== null) {
            $this->Stop = $param["Stop"];
        }
    }
}
