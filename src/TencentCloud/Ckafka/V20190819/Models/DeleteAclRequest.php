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
 * DeleteAcl请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id，可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id，可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
 * @method integer getResourceType() 获取<p>Acl资源类型，(2:TOPIC，3:GROUP，4:CLUSTER)</p>
 * @method void setResourceType(integer $ResourceType) 设置<p>Acl资源类型，(2:TOPIC，3:GROUP，4:CLUSTER)</p>
 * @method string getResourceName() 获取<p>资源名称，和resourceType相关，如当resourceType为TOPIC时，则该字段表示topic名称，当resourceType为GROUP时，该字段表示group名称，当resourceType为CLUSTER时，该字段可为空。</p>
 * @method void setResourceName(string $ResourceName) 设置<p>资源名称，和resourceType相关，如当resourceType为TOPIC时，则该字段表示topic名称，当resourceType为GROUP时，该字段表示group名称，当resourceType为CLUSTER时，该字段可为空。</p>
 * @method integer getOperation() 获取<p>Acl操作方式</p><p>枚举值：</p><ul><li>2： ALL</li><li>3： READ</li><li>4： WRITE</li><li>5： CREATE</li><li>6： DELETE</li><li>7： ALTER</li><li>8： DESCRIBE</li><li>9： CLUSTER_ACTION</li><li>10： DESCRIBE_CONFIGS</li><li>11： ALTER_CONFIGS</li><li>12： IDEMPOTENT_WRITE</li></ul><p>合法取值与 ResourceType 相关，传入组合以外的值将返回参数错误。本参数必须与 PermissionType 同时传入</p><ul><li>ResourceType=2（TOPIC）：2、3、4、5、6、7、8、10、11</li><li>ResourceType=3（GROUP）：2、3、6、8</li><li>ResourceType=4（CLUSTER）：2、5、7、8、9、10、11、12</li></ul>
 * @method void setOperation(integer $Operation) 设置<p>Acl操作方式</p><p>枚举值：</p><ul><li>2： ALL</li><li>3： READ</li><li>4： WRITE</li><li>5： CREATE</li><li>6： DELETE</li><li>7： ALTER</li><li>8： DESCRIBE</li><li>9： CLUSTER_ACTION</li><li>10： DESCRIBE_CONFIGS</li><li>11： ALTER_CONFIGS</li><li>12： IDEMPOTENT_WRITE</li></ul><p>合法取值与 ResourceType 相关，传入组合以外的值将返回参数错误。本参数必须与 PermissionType 同时传入</p><ul><li>ResourceType=2（TOPIC）：2、3、4、5、6、7、8、10、11</li><li>ResourceType=3（GROUP）：2、3、6、8</li><li>ResourceType=4（CLUSTER）：2、5、7、8、9、10、11、12</li></ul>
 * @method integer getPermissionType() 获取<p>权限类型，当前ckafka支持ALLOW(相当于白名单)，其它用于后续兼容开源kafka的acl时使用</p><p>枚举值：</p><ul><li>2： DENY</li><li>3： ALLOW</li></ul><p>本参数必须与 Operation 同时传入</p>
 * @method void setPermissionType(integer $PermissionType) 设置<p>权限类型，当前ckafka支持ALLOW(相当于白名单)，其它用于后续兼容开源kafka的acl时使用</p><p>枚举值：</p><ul><li>2： DENY</li><li>3： ALLOW</li></ul><p>本参数必须与 Operation 同时传入</p>
 * @method string getHost() 获取<p>默认为*，表示任何host都可以访问，当前ckafka不支持host为*，但是后面开源kafka的产品化会直接支持</p><p>删除时与 Principal、Operation、PermissionType 一起参与精确匹配</p>
 * @method void setHost(string $Host) 设置<p>默认为*，表示任何host都可以访问，当前ckafka不支持host为*，但是后面开源kafka的产品化会直接支持</p><p>删除时与 Principal、Operation、PermissionType 一起参与精确匹配</p>
 * @method string getPrincipal() 获取<p>用户列表，默认为User:*，表示任何user都可以访问，当前用户只能是用户列表中包含的用户</p><p>删除时不校验该用户是否仍存在，允许清理已删除用户的残留策略；该参数与 Host、Operation、PermissionType 一起参与精确匹配</p>
 * @method void setPrincipal(string $Principal) 设置<p>用户列表，默认为User:*，表示任何user都可以访问，当前用户只能是用户列表中包含的用户</p><p>删除时不校验该用户是否仍存在，允许清理已删除用户的残留策略；该参数与 Host、Operation、PermissionType 一起参与精确匹配</p>
 */
class DeleteAclRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id，可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Acl资源类型，(2:TOPIC，3:GROUP，4:CLUSTER)</p>
     */
    public $ResourceType;

    /**
     * @var string <p>资源名称，和resourceType相关，如当resourceType为TOPIC时，则该字段表示topic名称，当resourceType为GROUP时，该字段表示group名称，当resourceType为CLUSTER时，该字段可为空。</p>
     */
    public $ResourceName;

    /**
     * @var integer <p>Acl操作方式</p><p>枚举值：</p><ul><li>2： ALL</li><li>3： READ</li><li>4： WRITE</li><li>5： CREATE</li><li>6： DELETE</li><li>7： ALTER</li><li>8： DESCRIBE</li><li>9： CLUSTER_ACTION</li><li>10： DESCRIBE_CONFIGS</li><li>11： ALTER_CONFIGS</li><li>12： IDEMPOTENT_WRITE</li></ul><p>合法取值与 ResourceType 相关，传入组合以外的值将返回参数错误。本参数必须与 PermissionType 同时传入</p><ul><li>ResourceType=2（TOPIC）：2、3、4、5、6、7、8、10、11</li><li>ResourceType=3（GROUP）：2、3、6、8</li><li>ResourceType=4（CLUSTER）：2、5、7、8、9、10、11、12</li></ul>
     */
    public $Operation;

    /**
     * @var integer <p>权限类型，当前ckafka支持ALLOW(相当于白名单)，其它用于后续兼容开源kafka的acl时使用</p><p>枚举值：</p><ul><li>2： DENY</li><li>3： ALLOW</li></ul><p>本参数必须与 Operation 同时传入</p>
     */
    public $PermissionType;

    /**
     * @var string <p>默认为*，表示任何host都可以访问，当前ckafka不支持host为*，但是后面开源kafka的产品化会直接支持</p><p>删除时与 Principal、Operation、PermissionType 一起参与精确匹配</p>
     */
    public $Host;

    /**
     * @var string <p>用户列表，默认为User:*，表示任何user都可以访问，当前用户只能是用户列表中包含的用户</p><p>删除时不校验该用户是否仍存在，允许清理已删除用户的残留策略；该参数与 Host、Operation、PermissionType 一起参与精确匹配</p>
     */
    public $Principal;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id，可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
     * @param integer $ResourceType <p>Acl资源类型，(2:TOPIC，3:GROUP，4:CLUSTER)</p>
     * @param string $ResourceName <p>资源名称，和resourceType相关，如当resourceType为TOPIC时，则该字段表示topic名称，当resourceType为GROUP时，该字段表示group名称，当resourceType为CLUSTER时，该字段可为空。</p>
     * @param integer $Operation <p>Acl操作方式</p><p>枚举值：</p><ul><li>2： ALL</li><li>3： READ</li><li>4： WRITE</li><li>5： CREATE</li><li>6： DELETE</li><li>7： ALTER</li><li>8： DESCRIBE</li><li>9： CLUSTER_ACTION</li><li>10： DESCRIBE_CONFIGS</li><li>11： ALTER_CONFIGS</li><li>12： IDEMPOTENT_WRITE</li></ul><p>合法取值与 ResourceType 相关，传入组合以外的值将返回参数错误。本参数必须与 PermissionType 同时传入</p><ul><li>ResourceType=2（TOPIC）：2、3、4、5、6、7、8、10、11</li><li>ResourceType=3（GROUP）：2、3、6、8</li><li>ResourceType=4（CLUSTER）：2、5、7、8、9、10、11、12</li></ul>
     * @param integer $PermissionType <p>权限类型，当前ckafka支持ALLOW(相当于白名单)，其它用于后续兼容开源kafka的acl时使用</p><p>枚举值：</p><ul><li>2： DENY</li><li>3： ALLOW</li></ul><p>本参数必须与 Operation 同时传入</p>
     * @param string $Host <p>默认为*，表示任何host都可以访问，当前ckafka不支持host为*，但是后面开源kafka的产品化会直接支持</p><p>删除时与 Principal、Operation、PermissionType 一起参与精确匹配</p>
     * @param string $Principal <p>用户列表，默认为User:*，表示任何user都可以访问，当前用户只能是用户列表中包含的用户</p><p>删除时不校验该用户是否仍存在，允许清理已删除用户的残留策略；该参数与 Host、Operation、PermissionType 一起参与精确匹配</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("PermissionType",$param) and $param["PermissionType"] !== null) {
            $this->PermissionType = $param["PermissionType"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Principal",$param) and $param["Principal"] !== null) {
            $this->Principal = $param["Principal"];
        }
    }
}
