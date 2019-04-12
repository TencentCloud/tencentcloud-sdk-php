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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getPath() 获取脚本在COS上路径
 * @method void setPath(string $Path) 设置脚本在COS上路径
 * @method array getArgs() 获取执行脚本参数
 * @method void setArgs(array $Args) 设置执行脚本参数
 * @method string getBucket() 获取COS的Bucket名称
 * @method void setBucket(string $Bucket) 设置COS的Bucket名称
 * @method string getRegion() 获取COS的Region名称
 * @method void setRegion(string $Region) 设置COS的Region名称
 * @method string getDomain() 获取COS的Domain数据
 * @method void setDomain(string $Domain) 设置COS的Domain数据
 */

/**
 *预执行脚本配置
 */
class PreExecuteFileSettings extends AbstractModel
{
    /**
     * @var string 脚本在COS上路径
     */
    public $Path;

    /**
     * @var array 执行脚本参数
     */
    public $Args;

    /**
     * @var string COS的Bucket名称
     */
    public $Bucket;

    /**
     * @var string COS的Region名称
     */
    public $Region;

    /**
     * @var string COS的Domain数据
     */
    public $Domain;
    /**
     * @param string $Path 脚本在COS上路径
     * @param array $Args 执行脚本参数
     * @param string $Bucket COS的Bucket名称
     * @param string $Region COS的Region名称
     * @param string $Domain COS的Domain数据
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
