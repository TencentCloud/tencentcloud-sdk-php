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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端节点服务的服务白名单对象详情。
 *
 * @method integer getOwner() 获取AppId。可通过登录 腾讯云账号中心控制台 获取。
 * @method void setOwner(integer $Owner) 设置AppId。可通过登录 腾讯云账号中心控制台 获取。
 * @method string getUserUin() 获取用户Uin。可通过登录 腾讯云账号中心控制台 获取。
 * @method void setUserUin(string $UserUin) 设置用户Uin。可通过登录 腾讯云账号中心控制台 获取。
 * @method string getDescription() 获取描述信息。
 * @method void setDescription(string $Description) 设置描述信息。
 * @method string getCreateTime() 获取创建时间。格式为字符串YYYY-MM-DD HH:MM:SS。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。格式为字符串YYYY-MM-DD HH:MM:SS。
 * @method string getEndPointServiceId() 获取终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。

 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
 */
class VpcEndPointServiceUser extends AbstractModel
{
    /**
     * @var integer AppId。可通过登录 腾讯云账号中心控制台 获取。
     */
    public $Owner;

    /**
     * @var string 用户Uin。可通过登录 腾讯云账号中心控制台 获取。
     */
    public $UserUin;

    /**
     * @var string 描述信息。
     */
    public $Description;

    /**
     * @var string 创建时间。格式为字符串YYYY-MM-DD HH:MM:SS。
     */
    public $CreateTime;

    /**
     * @var string 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。

     */
    public $EndPointServiceId;

    /**
     * @param integer $Owner AppId。可通过登录 腾讯云账号中心控制台 获取。
     * @param string $UserUin 用户Uin。可通过登录 腾讯云账号中心控制台 获取。
     * @param string $Description 描述信息。
     * @param string $CreateTime 创建时间。格式为字符串YYYY-MM-DD HH:MM:SS。
     * @param string $EndPointServiceId 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
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
        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }
    }
}
