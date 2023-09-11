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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAddressTemplate请求参数结构体
 *
 * @method string getUuid() 获取地址模板唯一Id
 * @method void setUuid(string $Uuid) 设置地址模板唯一Id
 * @method string getName() 获取模板名称
 * @method void setName(string $Name) 设置模板名称
 * @method string getDetail() 获取模板描述
 * @method void setDetail(string $Detail) 设置模板描述
 * @method string getIpString() 获取Type为1，ip模板eg：1.1.1.1,2.2.2.2；
Type为5，域名模板eg：www.qq.com,www.tencent.com
 * @method void setIpString(string $IpString) 设置Type为1，ip模板eg：1.1.1.1,2.2.2.2；
Type为5，域名模板eg：www.qq.com,www.tencent.com
 * @method integer getType() 获取1 ip模板
5 域名模板
 * @method void setType(integer $Type) 设置1 ip模板
5 域名模板
 */
class ModifyAddressTemplateRequest extends AbstractModel
{
    /**
     * @var string 地址模板唯一Id
     */
    public $Uuid;

    /**
     * @var string 模板名称
     */
    public $Name;

    /**
     * @var string 模板描述
     */
    public $Detail;

    /**
     * @var string Type为1，ip模板eg：1.1.1.1,2.2.2.2；
Type为5，域名模板eg：www.qq.com,www.tencent.com
     */
    public $IpString;

    /**
     * @var integer 1 ip模板
5 域名模板
     */
    public $Type;

    /**
     * @param string $Uuid 地址模板唯一Id
     * @param string $Name 模板名称
     * @param string $Detail 模板描述
     * @param string $IpString Type为1，ip模板eg：1.1.1.1,2.2.2.2；
Type为5，域名模板eg：www.qq.com,www.tencent.com
     * @param integer $Type 1 ip模板
5 域名模板
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("IpString",$param) and $param["IpString"] !== null) {
            $this->IpString = $param["IpString"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
