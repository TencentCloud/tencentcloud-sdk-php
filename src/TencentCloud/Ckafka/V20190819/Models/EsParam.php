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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Es类型入参
 *
 * @method string getResource() 获取实例资源
 * @method void setResource(string $Resource) 设置实例资源
 * @method integer getPort() 获取Es的连接port
 * @method void setPort(integer $Port) 设置Es的连接port
 * @method string getUserName() 获取Es用户名
 * @method void setUserName(string $UserName) 设置Es用户名
 * @method string getPassword() 获取Es密码
 * @method void setPassword(string $Password) 设置Es密码
 * @method boolean getSelfBuilt() 获取是否为自建集群
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置是否为自建集群
 * @method string getServiceVip() 获取实例vip
 * @method void setServiceVip(string $ServiceVip) 设置实例vip
 * @method string getUniqVpcId() 获取实例的vpcId
 * @method void setUniqVpcId(string $UniqVpcId) 设置实例的vpcId
 * @method boolean getDropInvalidMessage() 获取Es是否抛弃解析失败的消息
 * @method void setDropInvalidMessage(boolean $DropInvalidMessage) 设置Es是否抛弃解析失败的消息
 * @method string getIndex() 获取Es自定义index名称
 * @method void setIndex(string $Index) 设置Es自定义index名称
 * @method string getDateFormat() 获取Es自定义日期后缀
 * @method void setDateFormat(string $DateFormat) 设置Es自定义日期后缀
 * @method string getContentKey() 获取非json格式数据的自定义key
 * @method void setContentKey(string $ContentKey) 设置非json格式数据的自定义key
 * @method boolean getDropInvalidJsonMessage() 获取Es是否抛弃非json格式的消息
 * @method void setDropInvalidJsonMessage(boolean $DropInvalidJsonMessage) 设置Es是否抛弃非json格式的消息
 * @method string getDocumentIdField() 获取转储到Es中的文档ID取值字段名
 * @method void setDocumentIdField(string $DocumentIdField) 设置转储到Es中的文档ID取值字段名
 * @method string getIndexType() 获取Es自定义index名称的类型，STRING，JSONPATH，默认为STRING
 * @method void setIndexType(string $IndexType) 设置Es自定义index名称的类型，STRING，JSONPATH，默认为STRING
 * @method DropCls getDropCls() 获取当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
 * @method void setDropCls(DropCls $DropCls) 设置当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
 * @method string getDatabasePrimaryKey() 获取转储到ES的消息为Database的binlog时，如果需要同步数据库操作，即增删改的操作到ES时填写数据库表主键
 * @method void setDatabasePrimaryKey(string $DatabasePrimaryKey) 设置转储到ES的消息为Database的binlog时，如果需要同步数据库操作，即增删改的操作到ES时填写数据库表主键
 * @method FailureParam getDropDlq() 获取死信队列
 * @method void setDropDlq(FailureParam $DropDlq) 设置死信队列
 */
class EsParam extends AbstractModel
{
    /**
     * @var string 实例资源
     */
    public $Resource;

    /**
     * @var integer Es的连接port
     */
    public $Port;

    /**
     * @var string Es用户名
     */
    public $UserName;

    /**
     * @var string Es密码
     */
    public $Password;

    /**
     * @var boolean 是否为自建集群
     */
    public $SelfBuilt;

    /**
     * @var string 实例vip
     */
    public $ServiceVip;

    /**
     * @var string 实例的vpcId
     */
    public $UniqVpcId;

    /**
     * @var boolean Es是否抛弃解析失败的消息
     */
    public $DropInvalidMessage;

    /**
     * @var string Es自定义index名称
     */
    public $Index;

    /**
     * @var string Es自定义日期后缀
     */
    public $DateFormat;

    /**
     * @var string 非json格式数据的自定义key
     */
    public $ContentKey;

    /**
     * @var boolean Es是否抛弃非json格式的消息
     */
    public $DropInvalidJsonMessage;

    /**
     * @var string 转储到Es中的文档ID取值字段名
     */
    public $DocumentIdField;

    /**
     * @var string Es自定义index名称的类型，STRING，JSONPATH，默认为STRING
     */
    public $IndexType;

    /**
     * @var DropCls 当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
     */
    public $DropCls;

    /**
     * @var string 转储到ES的消息为Database的binlog时，如果需要同步数据库操作，即增删改的操作到ES时填写数据库表主键
     */
    public $DatabasePrimaryKey;

    /**
     * @var FailureParam 死信队列
     */
    public $DropDlq;

    /**
     * @param string $Resource 实例资源
     * @param integer $Port Es的连接port
     * @param string $UserName Es用户名
     * @param string $Password Es密码
     * @param boolean $SelfBuilt 是否为自建集群
     * @param string $ServiceVip 实例vip
     * @param string $UniqVpcId 实例的vpcId
     * @param boolean $DropInvalidMessage Es是否抛弃解析失败的消息
     * @param string $Index Es自定义index名称
     * @param string $DateFormat Es自定义日期后缀
     * @param string $ContentKey 非json格式数据的自定义key
     * @param boolean $DropInvalidJsonMessage Es是否抛弃非json格式的消息
     * @param string $DocumentIdField 转储到Es中的文档ID取值字段名
     * @param string $IndexType Es自定义index名称的类型，STRING，JSONPATH，默认为STRING
     * @param DropCls $DropCls 当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
     * @param string $DatabasePrimaryKey 转储到ES的消息为Database的binlog时，如果需要同步数据库操作，即增删改的操作到ES时填写数据库表主键
     * @param FailureParam $DropDlq 死信队列
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
    }
}
