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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyObject请求参数结构体
 *
 * @method string getObjectId() 获取<p>修改对象标识</p>
 * @method void setObjectId(string $ObjectId) 设置<p>修改对象标识</p>
 * @method string getOpType() 获取<p>改动作类型:Status修改开关，InstanceId绑定实例, Proxy设置代理状态</p>
 * @method void setOpType(string $OpType) 设置<p>改动作类型:Status修改开关，InstanceId绑定实例, Proxy设置代理状态</p>
 * @method integer getStatus() 获取<p>新的Waf开关状态，如果和已有状态相同认为修改成功。状态可以为0或1</p>
 * @method void setStatus(integer $Status) 设置<p>新的Waf开关状态，如果和已有状态相同认为修改成功。状态可以为0或1</p>
 * @method string getInstanceId() 获取<p>新的实例ID，如果和已绑定的实例相同认为修改成功</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>新的实例ID，如果和已绑定的实例相同认为修改成功</p>
 * @method integer getProxy() 获取<p>是否开启代理，0:不开启,1:以XFF的第一个IP地址作为客户端IP,2:以remote_addr作为客户端IP,3:从指定的头部字段获取客户端IP，字段通过IpHeaders字段给出(OpType为Status或Proxy时，该值有效)</p>
 * @method void setProxy(integer $Proxy) 设置<p>是否开启代理，0:不开启,1:以XFF的第一个IP地址作为客户端IP,2:以remote_addr作为客户端IP,3:从指定的头部字段获取客户端IP，字段通过IpHeaders字段给出(OpType为Status或Proxy时，该值有效)</p>
 * @method array getIpHeaders() 获取<p>IsCdn=3时，需要填此参数，表示自定义header(OpType为Status或Proxy时，该值有效)</p>
 * @method void setIpHeaders(array $IpHeaders) 设置<p>IsCdn=3时，需要填此参数，表示自定义header(OpType为Status或Proxy时，该值有效)</p>
 * @method integer getMemberAppId() 获取<p>对象所属集团成员appid</p>
 * @method void setMemberAppId(integer $MemberAppId) 设置<p>对象所属集团成员appid</p>
 * @method string getMemberUin() 获取<p>对象所属集团成员uin</p>
 * @method void setMemberUin(string $MemberUin) 设置<p>对象所属集团成员uin</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 */
class ModifyObjectRequest extends AbstractModel
{
    /**
     * @var string <p>修改对象标识</p>
     */
    public $ObjectId;

    /**
     * @var string <p>改动作类型:Status修改开关，InstanceId绑定实例, Proxy设置代理状态</p>
     */
    public $OpType;

    /**
     * @var integer <p>新的Waf开关状态，如果和已有状态相同认为修改成功。状态可以为0或1</p>
     */
    public $Status;

    /**
     * @var string <p>新的实例ID，如果和已绑定的实例相同认为修改成功</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>是否开启代理，0:不开启,1:以XFF的第一个IP地址作为客户端IP,2:以remote_addr作为客户端IP,3:从指定的头部字段获取客户端IP，字段通过IpHeaders字段给出(OpType为Status或Proxy时，该值有效)</p>
     */
    public $Proxy;

    /**
     * @var array <p>IsCdn=3时，需要填此参数，表示自定义header(OpType为Status或Proxy时，该值有效)</p>
     */
    public $IpHeaders;

    /**
     * @var integer <p>对象所属集团成员appid</p>
     */
    public $MemberAppId;

    /**
     * @var string <p>对象所属集团成员uin</p>
     */
    public $MemberUin;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @param string $ObjectId <p>修改对象标识</p>
     * @param string $OpType <p>改动作类型:Status修改开关，InstanceId绑定实例, Proxy设置代理状态</p>
     * @param integer $Status <p>新的Waf开关状态，如果和已有状态相同认为修改成功。状态可以为0或1</p>
     * @param string $InstanceId <p>新的实例ID，如果和已绑定的实例相同认为修改成功</p>
     * @param integer $Proxy <p>是否开启代理，0:不开启,1:以XFF的第一个IP地址作为客户端IP,2:以remote_addr作为客户端IP,3:从指定的头部字段获取客户端IP，字段通过IpHeaders字段给出(OpType为Status或Proxy时，该值有效)</p>
     * @param array $IpHeaders <p>IsCdn=3时，需要填此参数，表示自定义header(OpType为Status或Proxy时，该值有效)</p>
     * @param integer $MemberAppId <p>对象所属集团成员appid</p>
     * @param string $MemberUin <p>对象所属集团成员uin</p>
     * @param array $Tags <p>标签信息</p>
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
        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("OpType",$param) and $param["OpType"] !== null) {
            $this->OpType = $param["OpType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Proxy",$param) and $param["Proxy"] !== null) {
            $this->Proxy = $param["Proxy"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }

        if (array_key_exists("MemberAppId",$param) and $param["MemberAppId"] !== null) {
            $this->MemberAppId = $param["MemberAppId"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
