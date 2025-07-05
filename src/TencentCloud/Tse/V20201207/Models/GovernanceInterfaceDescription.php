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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务契约接口定义
 *
 * @method string getID() 获取契约接口ID
 * @method void setID(string $ID) 设置契约接口ID
 * @method string getMethod() 获取方法名称
 * @method void setMethod(string $Method) 设置方法名称
 * @method string getPath() 获取路径/接口名称
 * @method void setPath(string $Path) 设置路径/接口名称
 * @method string getContent() 获取内容
 * @method void setContent(string $Content) 设置内容
 * @method string getSource() 获取创建来源
 * @method void setSource(string $Source) 设置创建来源
 * @method string getRevision() 获取信息摘要
 * @method void setRevision(string $Revision) 设置信息摘要
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getName() 获取接口名称
 * @method void setName(string $Name) 设置接口名称
 */
class GovernanceInterfaceDescription extends AbstractModel
{
    /**
     * @var string 契约接口ID
     */
    public $ID;

    /**
     * @var string 方法名称
     */
    public $Method;

    /**
     * @var string 路径/接口名称
     */
    public $Path;

    /**
     * @var string 内容
     */
    public $Content;

    /**
     * @var string 创建来源
     */
    public $Source;

    /**
     * @var string 信息摘要
     */
    public $Revision;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 接口名称
     */
    public $Name;

    /**
     * @param string $ID 契约接口ID
     * @param string $Method 方法名称
     * @param string $Path 路径/接口名称
     * @param string $Content 内容
     * @param string $Source 创建来源
     * @param string $Revision 信息摘要
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param string $Name 接口名称
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Revision",$param) and $param["Revision"] !== null) {
            $this->Revision = $param["Revision"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
