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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询Client Token
 *
 * @method string getNodeIp() 获取节点 IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeIp(string $NodeIp) 设置节点 IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocalDirectory() 获取挂载点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalDirectory(string $LocalDirectory) 设置挂载点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGooseFSDirectory() 获取可以访问的 GooseFS 目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGooseFSDirectory(string $GooseFSDirectory) 设置可以访问的 GooseFS 目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getToken() 获取token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToken(string $Token) 设置token
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClientToken extends AbstractModel
{
    /**
     * @var string 节点 IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeIp;

    /**
     * @var string 挂载点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalDirectory;

    /**
     * @var string 可以访问的 GooseFS 目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GooseFSDirectory;

    /**
     * @var string token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Token;

    /**
     * @param string $NodeIp 节点 IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocalDirectory 挂载点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GooseFSDirectory 可以访问的 GooseFS 目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Token token
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
        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("LocalDirectory",$param) and $param["LocalDirectory"] !== null) {
            $this->LocalDirectory = $param["LocalDirectory"];
        }

        if (array_key_exists("GooseFSDirectory",$param) and $param["GooseFSDirectory"] !== null) {
            $this->GooseFSDirectory = $param["GooseFSDirectory"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
