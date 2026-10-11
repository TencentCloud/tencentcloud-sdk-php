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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引擎依赖管理，对应 Spark 的 --jars / --files / --archives / --py-files 四类资源。每条 JAR 要么 COS 路径（cos:///cosn://），要么 Maven GAV（group:artifact:version）；files/archives/pyFiles 是 COS 路径列表（pyFiles 支持 .py/.zip/.egg/.whl）。
 *
 * @method array getJars() 获取<p>JAR 列表：每行一个 COS 路径或 Maven GAV。</p>
 * @method void setJars(array $Jars) 设置<p>JAR 列表：每行一个 COS 路径或 Maven GAV。</p>
 * @method array getFiles() 获取<p>files 列表：COS 路径，下载到 executor 工作目录（不解压）。</p>
 * @method void setFiles(array $Files) 设置<p>files 列表：COS 路径，下载到 executor 工作目录（不解压）。</p>
 * @method array getArchives() 获取<p>archives 列表：COS 路径，下载并解压到 executor 工作目录。</p>
 * @method void setArchives(array $Archives) 设置<p>archives 列表：COS 路径，下载并解压到 executor 工作目录。</p>
 * @method array getPyFiles() 获取<p>pyFiles 列表：COS 路径（.py/.zip/.egg/.whl），等价 Spark --py-files。</p>
 * @method void setPyFiles(array $PyFiles) 设置<p>pyFiles 列表：COS 路径（.py/.zip/.egg/.whl），等价 Spark --py-files。</p>
 */
class EngineConfigDependencies extends AbstractModel
{
    /**
     * @var array <p>JAR 列表：每行一个 COS 路径或 Maven GAV。</p>
     */
    public $Jars;

    /**
     * @var array <p>files 列表：COS 路径，下载到 executor 工作目录（不解压）。</p>
     */
    public $Files;

    /**
     * @var array <p>archives 列表：COS 路径，下载并解压到 executor 工作目录。</p>
     */
    public $Archives;

    /**
     * @var array <p>pyFiles 列表：COS 路径（.py/.zip/.egg/.whl），等价 Spark --py-files。</p>
     */
    public $PyFiles;

    /**
     * @param array $Jars <p>JAR 列表：每行一个 COS 路径或 Maven GAV。</p>
     * @param array $Files <p>files 列表：COS 路径，下载到 executor 工作目录（不解压）。</p>
     * @param array $Archives <p>archives 列表：COS 路径，下载并解压到 executor 工作目录。</p>
     * @param array $PyFiles <p>pyFiles 列表：COS 路径（.py/.zip/.egg/.whl），等价 Spark --py-files。</p>
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
        if (array_key_exists("Jars",$param) and $param["Jars"] !== null) {
            $this->Jars = $param["Jars"];
        }

        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = $param["Files"];
        }

        if (array_key_exists("Archives",$param) and $param["Archives"] !== null) {
            $this->Archives = $param["Archives"];
        }

        if (array_key_exists("PyFiles",$param) and $param["PyFiles"] !== null) {
            $this->PyFiles = $param["PyFiles"];
        }
    }
}
