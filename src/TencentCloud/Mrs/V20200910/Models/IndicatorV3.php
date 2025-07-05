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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检验报告v3
 *
 * @method array getTableIndictors() 获取检验报告V3结论
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableIndictors(array $TableIndictors) 设置检验报告V3结论
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取版本号
 * @method void setVersion(string $Version) 设置版本号
 * @method array getTableIndicators() 获取检验报告V3结论
 * @method void setTableIndicators(array $TableIndicators) 设置检验报告V3结论
 * @method integer getPage() 获取数据在原PDF文件中的第几页
 * @method void setPage(integer $Page) 设置数据在原PDF文件中的第几页
 */
class IndicatorV3 extends AbstractModel
{
    /**
     * @var array 检验报告V3结论
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $TableIndictors;

    /**
     * @var string 版本号
     */
    public $Version;

    /**
     * @var array 检验报告V3结论
     */
    public $TableIndicators;

    /**
     * @var integer 数据在原PDF文件中的第几页
     */
    public $Page;

    /**
     * @param array $TableIndictors 检验报告V3结论
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 版本号
     * @param array $TableIndicators 检验报告V3结论
     * @param integer $Page 数据在原PDF文件中的第几页
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
        if (array_key_exists("TableIndictors",$param) and $param["TableIndictors"] !== null) {
            $this->TableIndictors = [];
            foreach ($param["TableIndictors"] as $key => $value){
                $obj = new TableIndicators();
                $obj->deserialize($value);
                array_push($this->TableIndictors, $obj);
            }
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("TableIndicators",$param) and $param["TableIndicators"] !== null) {
            $this->TableIndicators = [];
            foreach ($param["TableIndicators"] as $key => $value){
                $obj = new TableIndicators();
                $obj->deserialize($value);
                array_push($this->TableIndicators, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
