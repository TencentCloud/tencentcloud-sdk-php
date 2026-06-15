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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微服务API数组
 *
 * @method string getPath() 获取<p>API 请求路径</p>
 * @method void setPath(string $Path) 设置<p>API 请求路径</p>
 * @method string getMethod() 获取<p>请求方法</p>
 * @method void setMethod(string $Method) 设置<p>请求方法</p>
 * @method string getDescription() 获取<p>方法描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>方法描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>API状态 0:离线 1:在线</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>API状态 0:离线 1:在线</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiId() 获取<p>API ID</p>
 * @method void setApiId(string $ApiId) 设置<p>API ID</p>
 * @method string getSrcTypeName() 获取<p>API来源</p><p>枚举值：</p><ul><li>FROM_CONSUL： 服务注册</li><li>FROM_MANUAL： 手动录入</li></ul>
 * @method void setSrcTypeName(string $SrcTypeName) 设置<p>API来源</p><p>枚举值：</p><ul><li>FROM_CONSUL： 服务注册</li><li>FROM_MANUAL： 手动录入</li></ul>
 */
class MsApiArray extends AbstractModel
{
    /**
     * @var string <p>API 请求路径</p>
     */
    public $Path;

    /**
     * @var string <p>请求方法</p>
     */
    public $Method;

    /**
     * @var string <p>方法描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>API状态 0:离线 1:在线</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>API ID</p>
     */
    public $ApiId;

    /**
     * @var string <p>API来源</p><p>枚举值：</p><ul><li>FROM_CONSUL： 服务注册</li><li>FROM_MANUAL： 手动录入</li></ul>
     */
    public $SrcTypeName;

    /**
     * @param string $Path <p>API 请求路径</p>
     * @param string $Method <p>请求方法</p>
     * @param string $Description <p>方法描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>API状态 0:离线 1:在线</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiId <p>API ID</p>
     * @param string $SrcTypeName <p>API来源</p><p>枚举值：</p><ul><li>FROM_CONSUL： 服务注册</li><li>FROM_MANUAL： 手动录入</li></ul>
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("SrcTypeName",$param) and $param["SrcTypeName"] !== null) {
            $this->SrcTypeName = $param["SrcTypeName"];
        }
    }
}
