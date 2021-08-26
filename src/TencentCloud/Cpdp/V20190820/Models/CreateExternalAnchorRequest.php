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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExternalAnchor请求参数结构体
 *
 * @method string getUid() 获取平台业务系统唯一标示的主播id
 * @method void setUid(string $Uid) 设置平台业务系统唯一标示的主播id
 * @method string getName() 获取主播名称
 * @method void setName(string $Name) 设置主播名称
 * @method string getIdNo() 获取身份证号
 * @method void setIdNo(string $IdNo) 设置身份证号
 * @method string getIdCardFront() 获取身份证正面图片下载链接
 * @method void setIdCardFront(string $IdCardFront) 设置身份证正面图片下载链接
 * @method string getIdCardReverse() 获取身份证反面图片下载链接
 * @method void setIdCardReverse(string $IdCardReverse) 设置身份证反面图片下载链接
 * @method string getAgentId() 获取指定分配的代理商ID
 * @method void setAgentId(string $AgentId) 设置指定分配的代理商ID
 */
class CreateExternalAnchorRequest extends AbstractModel
{
    /**
     * @var string 平台业务系统唯一标示的主播id
     */
    public $Uid;

    /**
     * @var string 主播名称
     */
    public $Name;

    /**
     * @var string 身份证号
     */
    public $IdNo;

    /**
     * @var string 身份证正面图片下载链接
     */
    public $IdCardFront;

    /**
     * @var string 身份证反面图片下载链接
     */
    public $IdCardReverse;

    /**
     * @var string 指定分配的代理商ID
     */
    public $AgentId;

    /**
     * @param string $Uid 平台业务系统唯一标示的主播id
     * @param string $Name 主播名称
     * @param string $IdNo 身份证号
     * @param string $IdCardFront 身份证正面图片下载链接
     * @param string $IdCardReverse 身份证反面图片下载链接
     * @param string $AgentId 指定分配的代理商ID
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdNo",$param) and $param["IdNo"] !== null) {
            $this->IdNo = $param["IdNo"];
        }

        if (array_key_exists("IdCardFront",$param) and $param["IdCardFront"] !== null) {
            $this->IdCardFront = $param["IdCardFront"];
        }

        if (array_key_exists("IdCardReverse",$param) and $param["IdCardReverse"] !== null) {
            $this->IdCardReverse = $param["IdCardReverse"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }
    }
}
