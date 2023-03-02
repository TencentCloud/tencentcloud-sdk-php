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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取工作空间临时访问 token 出参
 *
 * @method string getToken() 获取访问工作空间临时凭证
 * @method void setToken(string $Token) 设置访问工作空间临时凭证
 * @method string getExpiredTime() 获取token 过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(string $ExpiredTime) 设置token 过期时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkspaceTokenInfoV0 extends AbstractModel
{
    /**
     * @var string 访问工作空间临时凭证
     */
    public $Token;

    /**
     * @var string token 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @param string $Token 访问工作空间临时凭证
     * @param string $ExpiredTime token 过期时间
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
        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
