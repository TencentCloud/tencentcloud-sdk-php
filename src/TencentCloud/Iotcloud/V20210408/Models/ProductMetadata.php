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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品元数据
 *
 * @method integer getCreationDate() 获取产品创建时间
 * @method void setCreationDate(integer $CreationDate) 设置产品创建时间
 * @method integer getCreateUserId() 获取创建者 Uin
 * @method void setCreateUserId(integer $CreateUserId) 设置创建者 Uin
 * @method integer getUserId() 获取账号 Uin
 * @method void setUserId(integer $UserId) 设置账号 Uin
 */
class ProductMetadata extends AbstractModel
{
    /**
     * @var integer 产品创建时间
     */
    public $CreationDate;

    /**
     * @var integer 创建者 Uin
     */
    public $CreateUserId;

    /**
     * @var integer 账号 Uin
     */
    public $UserId;

    /**
     * @param integer $CreationDate 产品创建时间
     * @param integer $CreateUserId 创建者 Uin
     * @param integer $UserId 账号 Uin
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
        if (array_key_exists("CreationDate",$param) and $param["CreationDate"] !== null) {
            $this->CreationDate = $param["CreationDate"];
        }

        if (array_key_exists("CreateUserId",$param) and $param["CreateUserId"] !== null) {
            $this->CreateUserId = $param["CreateUserId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
