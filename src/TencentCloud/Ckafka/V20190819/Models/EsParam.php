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
 * Es类型入参
 *
 * @method string getResource() 获取<p>Es实例资源Id</p>
 * @method void setResource(string $Resource) 设置<p>Es实例资源Id</p>
 * @method integer getPort() 获取<p>Es的连接port</p>
 * @method void setPort(integer $Port) 设置<p>Es的连接port</p>
 * @method string getUserName() 获取<p>Es用户名</p>
 * @method void setUserName(string $UserName) 设置<p>Es用户名</p>
 * @method string getPassword() 获取<p>Es密码</p>
 * @method void setPassword(string $Password) 设置<p>Es密码</p>
 * @method boolean getSelfBuilt() 获取<p>是否为自建集群</p>
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置<p>是否为自建集群</p>
 * @method string getServiceVip() 获取<p>实例vip</p>
 * @method void setServiceVip(string $ServiceVip) 设置<p>实例vip</p>
 * @method string getUniqVpcId() 获取<p>实例的vpcId</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>实例的vpcId</p>
 * @method boolean getDropInvalidMessage() 获取<p>Es是否抛弃解析失败的消息</p>
 * @method void setDropInvalidMessage(boolean $DropInvalidMessage) 设置<p>Es是否抛弃解析失败的消息</p>
 * @method string getIndex() 获取<p>Es自定义index名称</p>
 * @method void setIndex(string $Index) 设置<p>Es自定义index名称</p>
 * @method string getDateFormat() 获取<p>Es自定义日期后缀</p>
 * @method void setDateFormat(string $DateFormat) 设置<p>Es自定义日期后缀</p>
 * @method string getContentKey() 获取<p>非json格式数据的自定义key</p>
 * @method void setContentKey(string $ContentKey) 设置<p>非json格式数据的自定义key</p>
 * @method boolean getDropInvalidJsonMessage() 获取<p>Es是否抛弃非json格式的消息</p>
 * @method void setDropInvalidJsonMessage(boolean $DropInvalidJsonMessage) 设置<p>Es是否抛弃非json格式的消息</p>
 * @method string getDocumentIdField() 获取<p>转储到Es中的文档ID取值字段名</p>
 * @method void setDocumentIdField(string $DocumentIdField) 设置<p>转储到Es中的文档ID取值字段名</p>
 * @method string getIndexType() 获取<p>Es自定义index名称的类型，STRING，JSONPATH，默认为STRING</p>
 * @method void setIndexType(string $IndexType) 设置<p>Es自定义index名称的类型，STRING，JSONPATH，默认为STRING</p>
 * @method DropCls getDropCls() 获取<p>当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效</p>
 * @method void setDropCls(DropCls $DropCls) 设置<p>当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效</p>
 * @method string getDatabasePrimaryKey() 获取<p>转储到ES的消息为Database的binlog时，如果需要同步数据库操作，即增删改的操作到ES时填写数据库表主键</p>
 * @method void setDatabasePrimaryKey(string $DatabasePrimaryKey) 设置<p>转储到ES的消息为Database的binlog时，如果需要同步数据库操作，即增删改的操作到ES时填写数据库表主键</p>
 * @method FailureParam getDropDlq() 获取<p>死信队列</p>
 * @method void setDropDlq(FailureParam $DropDlq) 设置<p>死信队列</p>
 * @method array getRecordMappingList() 获取<p>使用数据订阅格式导入 es 时，消息与 es 索引字段映射关系。不填默认为默认字段匹配</p>
 * @method void setRecordMappingList(array $RecordMappingList) 设置<p>使用数据订阅格式导入 es 时，消息与 es 索引字段映射关系。不填默认为默认字段匹配</p>
 * @method string getDateField() 获取<p>消息要映射为 es 索引中 @timestamp 的字段，如果当前配置为空，则使用消息的时间戳进行映射</p>
 * @method void setDateField(string $DateField) 设置<p>消息要映射为 es 索引中 @timestamp 的字段，如果当前配置为空，则使用消息的时间戳进行映射</p>
 * @method string getRecordMappingMode() 获取<p>用来区分当前索引映射，属于新建索引还是存量索引。&quot;EXIST_MAPPING&quot;：从存量索引中选择；&quot;NEW_MAPPING&quot;：新建索引</p>
 * @method void setRecordMappingMode(string $RecordMappingMode) 设置<p>用来区分当前索引映射，属于新建索引还是存量索引。&quot;EXIST_MAPPING&quot;：从存量索引中选择；&quot;NEW_MAPPING&quot;：新建索引</p>
 * @method string getProtocol() 获取<p>集群版 ES 连接协议，默认http协议</p><p>枚举值：</p><ul><li>http： http协议</li><li>https： https协议</li></ul>
 * @method void setProtocol(string $Protocol) 设置<p>集群版 ES 连接协议，默认http协议</p><p>枚举值：</p><ul><li>http： http协议</li><li>https： https协议</li></ul>
 */
class EsParam extends AbstractModel
{
    /**
     * @var string <p>Es实例资源Id</p>
     */
    public $Resource;

    /**
     * @var integer <p>Es的连接port</p>
     */
    public $Port;

    /**
     * @var string <p>Es用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>Es密码</p>
     */
    public $Password;

    /**
     * @var boolean <p>是否为自建集群</p>
     */
    public $SelfBuilt;

    /**
     * @var string <p>实例vip</p>
     */
    public $ServiceVip;

    /**
     * @var string <p>实例的vpcId</p>
     */
    public $UniqVpcId;

    /**
     * @var boolean <p>Es是否抛弃解析失败的消息</p>
     */
    public $DropInvalidMessage;

    /**
     * @var string <p>Es自定义index名称</p>
     */
    public $Index;

    /**
     * @var string <p>Es自定义日期后缀</p>
     */
    public $DateFormat;

    /**
     * @var string <p>非json格式数据的自定义key</p>
     */
    public $ContentKey;

    /**
     * @var boolean <p>Es是否抛弃非json格式的消息</p>
     */
    public $DropInvalidJsonMessage;

    /**
     * @var string <p>转储到Es中的文档ID取值字段名</p>
     */
    public $DocumentIdField;

    /**
     * @var string <p>Es自定义index名称的类型，STRING，JSONPATH，默认为STRING</p>
     */
    public $IndexType;

    /**
     * @var DropCls <p>当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效</p>
     */
    public $DropCls;

    /**
     * @var string <p>转储到ES的消息为Database的binlog时，如果需要同步数据库操作，即增删改的操作到ES时填写数据库表主键</p>
     */
    public $DatabasePrimaryKey;

    /**
     * @var FailureParam <p>死信队列</p>
     */
    public $DropDlq;

    /**
     * @var array <p>使用数据订阅格式导入 es 时，消息与 es 索引字段映射关系。不填默认为默认字段匹配</p>
     */
    public $RecordMappingList;

    /**
     * @var string <p>消息要映射为 es 索引中 @timestamp 的字段，如果当前配置为空，则使用消息的时间戳进行映射</p>
     */
    public $DateField;

    /**
     * @var string <p>用来区分当前索引映射，属于新建索引还是存量索引。&quot;EXIST_MAPPING&quot;：从存量索引中选择；&quot;NEW_MAPPING&quot;：新建索引</p>
     */
    public $RecordMappingMode;

    /**
     * @var string <p>集群版 ES 连接协议，默认http协议</p><p>枚举值：</p><ul><li>http： http协议</li><li>https： https协议</li></ul>
     */
    public $Protocol;

    /**
     * @param string $Resource <p>Es实例资源Id</p>
     * @param integer $Port <p>Es的连接port</p>
     * @param string $UserName <p>Es用户名</p>
     * @param string $Password <p>Es密码</p>
     * @param boolean $SelfBuilt <p>是否为自建集群</p>
     * @param string $ServiceVip <p>实例vip</p>
     * @param string $UniqVpcId <p>实例的vpcId</p>
     * @param boolean $DropInvalidMessage <p>Es是否抛弃解析失败的消息</p>
     * @param string $Index <p>Es自定义index名称</p>
     * @param string $DateFormat <p>Es自定义日期后缀</p>
     * @param string $ContentKey <p>非json格式数据的自定义key</p>
     * @param boolean $DropInvalidJsonMessage <p>Es是否抛弃非json格式的消息</p>
     * @param string $DocumentIdField <p>转储到Es中的文档ID取值字段名</p>
     * @param string $IndexType <p>Es自定义index名称的类型，STRING，JSONPATH，默认为STRING</p>
     * @param DropCls $DropCls <p>当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效</p>
     * @param string $DatabasePrimaryKey <p>转储到ES的消息为Database的binlog时，如果需要同步数据库操作，即增删改的操作到ES时填写数据库表主键</p>
     * @param FailureParam $DropDlq <p>死信队列</p>
     * @param array $RecordMappingList <p>使用数据订阅格式导入 es 时，消息与 es 索引字段映射关系。不填默认为默认字段匹配</p>
     * @param string $DateField <p>消息要映射为 es 索引中 @timestamp 的字段，如果当前配置为空，则使用消息的时间戳进行映射</p>
     * @param string $RecordMappingMode <p>用来区分当前索引映射，属于新建索引还是存量索引。&quot;EXIST_MAPPING&quot;：从存量索引中选择；&quot;NEW_MAPPING&quot;：新建索引</p>
     * @param string $Protocol <p>集群版 ES 连接协议，默认http协议</p><p>枚举值：</p><ul><li>http： http协议</li><li>https： https协议</li></ul>
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("DropInvalidMessage",$param) and $param["DropInvalidMessage"] !== null) {
            $this->DropInvalidMessage = $param["DropInvalidMessage"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("DateFormat",$param) and $param["DateFormat"] !== null) {
            $this->DateFormat = $param["DateFormat"];
        }

        if (array_key_exists("ContentKey",$param) and $param["ContentKey"] !== null) {
            $this->ContentKey = $param["ContentKey"];
        }

        if (array_key_exists("DropInvalidJsonMessage",$param) and $param["DropInvalidJsonMessage"] !== null) {
            $this->DropInvalidJsonMessage = $param["DropInvalidJsonMessage"];
        }

        if (array_key_exists("DocumentIdField",$param) and $param["DocumentIdField"] !== null) {
            $this->DocumentIdField = $param["DocumentIdField"];
        }

        if (array_key_exists("IndexType",$param) and $param["IndexType"] !== null) {
            $this->IndexType = $param["IndexType"];
        }

        if (array_key_exists("DropCls",$param) and $param["DropCls"] !== null) {
            $this->DropCls = new DropCls();
            $this->DropCls->deserialize($param["DropCls"]);
        }

        if (array_key_exists("DatabasePrimaryKey",$param) and $param["DatabasePrimaryKey"] !== null) {
            $this->DatabasePrimaryKey = $param["DatabasePrimaryKey"];
        }

        if (array_key_exists("DropDlq",$param) and $param["DropDlq"] !== null) {
            $this->DropDlq = new FailureParam();
            $this->DropDlq->deserialize($param["DropDlq"]);
        }

        if (array_key_exists("RecordMappingList",$param) and $param["RecordMappingList"] !== null) {
            $this->RecordMappingList = [];
            foreach ($param["RecordMappingList"] as $key => $value){
                $obj = new EsRecordMapping();
                $obj->deserialize($value);
                array_push($this->RecordMappingList, $obj);
            }
        }

        if (array_key_exists("DateField",$param) and $param["DateField"] !== null) {
            $this->DateField = $param["DateField"];
        }

        if (array_key_exists("RecordMappingMode",$param) and $param["RecordMappingMode"] !== null) {
            $this->RecordMappingMode = $param["RecordMappingMode"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
