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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名别名信息
 *
 * @method integer getId() 获取域名别名ID
 * @method void setId(integer $Id) 设置域名别名ID
 * @method string getDomainAlias() 获取域名别名
 * @method void setDomainAlias(string $DomainAlias) 设置域名别名
 */
class DomainAliasInfo extends AbstractModel
{
    /**
     * @var integer 域名别名ID
     */
    public $Id;

    /**
     * @var string 域名别名
     */
    public $DomainAlias;

    /**
     * @param integer $Id 域名别名ID
     * @param string $DomainAlias 域名别名
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DomainAlias",$param) and $param["DomainAlias"] !== null) {
            $this->DomainAlias = $param["DomainAlias"];
        }
    }
}
