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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 注册元信息（携带即注册语义：storageUri 为训练产物根，零拷贝引用）
 *
 * @method string getCheckpointSubPath() 获取<p>Checkpoint 子路径不能为空</p>
 * @method void setCheckpointSubPath(string $CheckpointSubPath) 设置<p>Checkpoint 子路径不能为空</p>
 * @method string getInstanceId() 获取<p>来源训练实例标识（接入方自定义语义，可选）</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>来源训练实例标识（接入方自定义语义，可选）</p>
 * @method array getExtras() 获取<p>接入方扩展键值列表（原样落库，平台不解释）</p>
 * @method void setExtras(array $Extras) 设置<p>接入方扩展键值列表（原样落库，平台不解释）</p>
 */
class RegisterMeta extends AbstractModel
{
    /**
     * @var string <p>Checkpoint 子路径不能为空</p>
     */
    public $CheckpointSubPath;

    /**
     * @var string <p>来源训练实例标识（接入方自定义语义，可选）</p>
     */
    public $InstanceId;

    /**
     * @var array <p>接入方扩展键值列表（原样落库，平台不解释）</p>
     */
    public $Extras;

    /**
     * @param string $CheckpointSubPath <p>Checkpoint 子路径不能为空</p>
     * @param string $InstanceId <p>来源训练实例标识（接入方自定义语义，可选）</p>
     * @param array $Extras <p>接入方扩展键值列表（原样落库，平台不解释）</p>
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
        if (array_key_exists("CheckpointSubPath",$param) and $param["CheckpointSubPath"] !== null) {
            $this->CheckpointSubPath = $param["CheckpointSubPath"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Extras",$param) and $param["Extras"] !== null) {
            $this->Extras = [];
            foreach ($param["Extras"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Extras, $obj);
            }
        }
    }
}
