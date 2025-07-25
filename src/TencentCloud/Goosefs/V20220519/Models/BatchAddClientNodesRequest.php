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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchAddClientNodes请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method array getClientNodes() 获取添加客户端节点列表
 * @method void setClientNodes(array $ClientNodes) 设置添加客户端节点列表
 * @method boolean getSingleClusterFlag() 获取是否单集群默认是false	
 * @method void setSingleClusterFlag(boolean $SingleClusterFlag) 设置是否单集群默认是false	
 */
class BatchAddClientNodesRequest extends AbstractModel
{
    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var array 添加客户端节点列表
     */
    public $ClientNodes;

    /**
     * @var boolean 是否单集群默认是false	
     */
    public $SingleClusterFlag;

    /**
     * @param string $FileSystemId 文件系统ID
     * @param array $ClientNodes 添加客户端节点列表
     * @param boolean $SingleClusterFlag 是否单集群默认是false	
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("ClientNodes",$param) and $param["ClientNodes"] !== null) {
            $this->ClientNodes = [];
            foreach ($param["ClientNodes"] as $key => $value){
                $obj = new LinuxNodeAttribute();
                $obj->deserialize($value);
                array_push($this->ClientNodes, $obj);
            }
        }

        if (array_key_exists("SingleClusterFlag",$param) and $param["SingleClusterFlag"] !== null) {
            $this->SingleClusterFlag = $param["SingleClusterFlag"];
        }
    }
}
