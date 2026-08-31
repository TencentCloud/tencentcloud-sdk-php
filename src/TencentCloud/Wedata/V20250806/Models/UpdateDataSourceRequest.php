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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDataSource请求参数结构体
 *
 * @method integer getId() 获取<p>数据源id</p>
 * @method void setId(integer $Id) 设置<p>数据源id</p>
 * @method string getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
 * @method string getProdConProperties() 获取<p>数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同</p><blockquote><p>deployType:<br>CONNSTR_PUBLICDB(公网实例)<br>CONNSTR_CVMDB(自建实例)<br>INSTANCE(云实例)</p></blockquote><p><pre><code>mysql: 自建实例{    &quot;deployType&quot;: &quot;CONNSTR_CVMDB&quot;,    &quot;url&quot;: &quot;jdbc:mysql://&lt;host&gt;:&lt;port&gt;/&lt;database&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;vpcId&quot;: &quot;&lt;vpcId&gt;&quot;,    &quot;type&quot;: &quot;MYSQL&quot;}mysql: 云实例{    &quot;instanceid&quot;: &quot;&lt;instanceId&gt;&quot;,    &quot;db&quot;: &quot;&lt;database&gt;&quot;,    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;deployType&quot;: &quot;INSTANCE&quot;,    &quot;type&quot;: &quot;TENCENT_MYSQL&quot;}sql_server:{    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;url&quot;: &quot;jdbc:sqlserver://&lt;host&gt;:&lt;port&gt;;DatabaseName=&lt;database&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;type&quot;: &quot;SQLSERVER&quot;}redis:    redisType:    -NO_ACCOUT(免账号)    -SELF_ACCOUNT(自定义账号){    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;ip&quot;: &quot;&lt;host&gt;&quot;,    &quot;port&quot;: &quot;&lt;port&gt;&quot;,    &quot;redisType&quot;: &quot;NO_ACCOUT&quot;,    &quot;type&quot;: &quot;REDIS&quot;}oracle:{    &quot;deployType&quot;: &quot;CONNSTR_CVMDB&quot;,    &quot;url&quot;: &quot;jdbc:oracle:thin:@&lt;host&gt;:&lt;port&gt;:&lt;sid&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;vpcId&quot;: &quot;&lt;vpcId&gt;&quot;,    &quot;type&quot;: &quot;ORACLE&quot;}mongodb:    advanceParams(自定义参数，会拼接至url后){    &quot;advanceParams&quot;: [        {            &quot;key&quot;: &quot;authSource&quot;,            &quot;value&quot;: &quot;admin&quot;        }    ],    &quot;db&quot;: &quot;&lt;database&gt;&quot;,    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;type&quot;: &quot;MONGODB&quot;,    &quot;host&quot;: &quot;&lt;host&gt;:&lt;port&gt;&quot;}postgresql:{    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;url&quot;: &quot;jdbc:postgresql://&lt;host&gt;:&lt;port&gt;/&lt;database&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;type&quot;: &quot;POSTGRE&quot;}kafka:    authType:    - sasl    - jaas    - sasl_plaintext    - sasl_ssl    - GSSAPI    ssl:    -PLAIN    -GSSAPI{    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;host&quot;: &quot;&lt;host&gt;:&lt;port&gt;&quot;,    &quot;ssl&quot;: &quot;GSSAPI&quot;,    &quot;authType&quot;: &quot;sasl&quot;,    &quot;type&quot;: &quot;KAFKA&quot;,    &quot;principal&quot;: &quot;&lt;principal&gt;&quot;,    &quot;serviceName&quot;: &quot;kafka&quot;}cos:{    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;deployType&quot;: &quot;INSTANCE&quot;,    &quot;secretId&quot;: &quot;&lt;secretId&gt;&quot;,    &quot;secretKey&quot;: &quot;&lt;secretKey&gt;&quot;,    &quot;bucket&quot;: &quot;&lt;bucket&gt;&quot;,    &quot;type&quot;: &quot;COS&quot;}</code></pre></p>
 * @method void setProdConProperties(string $ProdConProperties) 设置<p>数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同</p><blockquote><p>deployType:<br>CONNSTR_PUBLICDB(公网实例)<br>CONNSTR_CVMDB(自建实例)<br>INSTANCE(云实例)</p></blockquote><p><pre><code>mysql: 自建实例{    &quot;deployType&quot;: &quot;CONNSTR_CVMDB&quot;,    &quot;url&quot;: &quot;jdbc:mysql://&lt;host&gt;:&lt;port&gt;/&lt;database&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;vpcId&quot;: &quot;&lt;vpcId&gt;&quot;,    &quot;type&quot;: &quot;MYSQL&quot;}mysql: 云实例{    &quot;instanceid&quot;: &quot;&lt;instanceId&gt;&quot;,    &quot;db&quot;: &quot;&lt;database&gt;&quot;,    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;deployType&quot;: &quot;INSTANCE&quot;,    &quot;type&quot;: &quot;TENCENT_MYSQL&quot;}sql_server:{    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;url&quot;: &quot;jdbc:sqlserver://&lt;host&gt;:&lt;port&gt;;DatabaseName=&lt;database&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;type&quot;: &quot;SQLSERVER&quot;}redis:    redisType:    -NO_ACCOUT(免账号)    -SELF_ACCOUNT(自定义账号){    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;ip&quot;: &quot;&lt;host&gt;&quot;,    &quot;port&quot;: &quot;&lt;port&gt;&quot;,    &quot;redisType&quot;: &quot;NO_ACCOUT&quot;,    &quot;type&quot;: &quot;REDIS&quot;}oracle:{    &quot;deployType&quot;: &quot;CONNSTR_CVMDB&quot;,    &quot;url&quot;: &quot;jdbc:oracle:thin:@&lt;host&gt;:&lt;port&gt;:&lt;sid&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;vpcId&quot;: &quot;&lt;vpcId&gt;&quot;,    &quot;type&quot;: &quot;ORACLE&quot;}mongodb:    advanceParams(自定义参数，会拼接至url后){    &quot;advanceParams&quot;: [        {            &quot;key&quot;: &quot;authSource&quot;,            &quot;value&quot;: &quot;admin&quot;        }    ],    &quot;db&quot;: &quot;&lt;database&gt;&quot;,    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;type&quot;: &quot;MONGODB&quot;,    &quot;host&quot;: &quot;&lt;host&gt;:&lt;port&gt;&quot;}postgresql:{    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;url&quot;: &quot;jdbc:postgresql://&lt;host&gt;:&lt;port&gt;/&lt;database&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;type&quot;: &quot;POSTGRE&quot;}kafka:    authType:    - sasl    - jaas    - sasl_plaintext    - sasl_ssl    - GSSAPI    ssl:    -PLAIN    -GSSAPI{    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;host&quot;: &quot;&lt;host&gt;:&lt;port&gt;&quot;,    &quot;ssl&quot;: &quot;GSSAPI&quot;,    &quot;authType&quot;: &quot;sasl&quot;,    &quot;type&quot;: &quot;KAFKA&quot;,    &quot;principal&quot;: &quot;&lt;principal&gt;&quot;,    &quot;serviceName&quot;: &quot;kafka&quot;}cos:{    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;deployType&quot;: &quot;INSTANCE&quot;,    &quot;secretId&quot;: &quot;&lt;secretId&gt;&quot;,    &quot;secretKey&quot;: &quot;&lt;secretKey&gt;&quot;,    &quot;bucket&quot;: &quot;&lt;bucket&gt;&quot;,    &quot;type&quot;: &quot;COS&quot;}</code></pre></p>
 * @method string getDevConProperties() 获取<p>若项目为标准模式，则此字段必填</p>
 * @method void setDevConProperties(string $DevConProperties) 设置<p>若项目为标准模式，则此字段必填</p>
 * @method DataSourceFileUpload getProdFileUpload() 获取<p>生产环境数据源文件上传</p>
 * @method void setProdFileUpload(DataSourceFileUpload $ProdFileUpload) 设置<p>生产环境数据源文件上传</p>
 * @method DataSourceFileUpload getDevFileUpload() 获取<p>开发环境数据源文件上传</p>
 * @method void setDevFileUpload(DataSourceFileUpload $DevFileUpload) 设置<p>开发环境数据源文件上传</p>
 * @method string getDisplayName() 获取<p>数据源展示名，为了可视化查看</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>数据源展示名，为了可视化查看</p>
 * @method string getDescription() 获取<p>数据源描述信息</p>
 * @method void setDescription(string $Description) 设置<p>数据源描述信息</p>
 */
class UpdateDataSourceRequest extends AbstractModel
{
    /**
     * @var integer <p>数据源id</p>
     */
    public $Id;

    /**
     * @var string <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var string <p>数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同</p><blockquote><p>deployType:<br>CONNSTR_PUBLICDB(公网实例)<br>CONNSTR_CVMDB(自建实例)<br>INSTANCE(云实例)</p></blockquote><p><pre><code>mysql: 自建实例{    &quot;deployType&quot;: &quot;CONNSTR_CVMDB&quot;,    &quot;url&quot;: &quot;jdbc:mysql://&lt;host&gt;:&lt;port&gt;/&lt;database&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;vpcId&quot;: &quot;&lt;vpcId&gt;&quot;,    &quot;type&quot;: &quot;MYSQL&quot;}mysql: 云实例{    &quot;instanceid&quot;: &quot;&lt;instanceId&gt;&quot;,    &quot;db&quot;: &quot;&lt;database&gt;&quot;,    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;deployType&quot;: &quot;INSTANCE&quot;,    &quot;type&quot;: &quot;TENCENT_MYSQL&quot;}sql_server:{    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;url&quot;: &quot;jdbc:sqlserver://&lt;host&gt;:&lt;port&gt;;DatabaseName=&lt;database&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;type&quot;: &quot;SQLSERVER&quot;}redis:    redisType:    -NO_ACCOUT(免账号)    -SELF_ACCOUNT(自定义账号){    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;ip&quot;: &quot;&lt;host&gt;&quot;,    &quot;port&quot;: &quot;&lt;port&gt;&quot;,    &quot;redisType&quot;: &quot;NO_ACCOUT&quot;,    &quot;type&quot;: &quot;REDIS&quot;}oracle:{    &quot;deployType&quot;: &quot;CONNSTR_CVMDB&quot;,    &quot;url&quot;: &quot;jdbc:oracle:thin:@&lt;host&gt;:&lt;port&gt;:&lt;sid&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;vpcId&quot;: &quot;&lt;vpcId&gt;&quot;,    &quot;type&quot;: &quot;ORACLE&quot;}mongodb:    advanceParams(自定义参数，会拼接至url后){    &quot;advanceParams&quot;: [        {            &quot;key&quot;: &quot;authSource&quot;,            &quot;value&quot;: &quot;admin&quot;        }    ],    &quot;db&quot;: &quot;&lt;database&gt;&quot;,    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;type&quot;: &quot;MONGODB&quot;,    &quot;host&quot;: &quot;&lt;host&gt;:&lt;port&gt;&quot;}postgresql:{    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;url&quot;: &quot;jdbc:postgresql://&lt;host&gt;:&lt;port&gt;/&lt;database&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;type&quot;: &quot;POSTGRE&quot;}kafka:    authType:    - sasl    - jaas    - sasl_plaintext    - sasl_ssl    - GSSAPI    ssl:    -PLAIN    -GSSAPI{    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;host&quot;: &quot;&lt;host&gt;:&lt;port&gt;&quot;,    &quot;ssl&quot;: &quot;GSSAPI&quot;,    &quot;authType&quot;: &quot;sasl&quot;,    &quot;type&quot;: &quot;KAFKA&quot;,    &quot;principal&quot;: &quot;&lt;principal&gt;&quot;,    &quot;serviceName&quot;: &quot;kafka&quot;}cos:{    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;deployType&quot;: &quot;INSTANCE&quot;,    &quot;secretId&quot;: &quot;&lt;secretId&gt;&quot;,    &quot;secretKey&quot;: &quot;&lt;secretKey&gt;&quot;,    &quot;bucket&quot;: &quot;&lt;bucket&gt;&quot;,    &quot;type&quot;: &quot;COS&quot;}</code></pre></p>
     */
    public $ProdConProperties;

    /**
     * @var string <p>若项目为标准模式，则此字段必填</p>
     */
    public $DevConProperties;

    /**
     * @var DataSourceFileUpload <p>生产环境数据源文件上传</p>
     */
    public $ProdFileUpload;

    /**
     * @var DataSourceFileUpload <p>开发环境数据源文件上传</p>
     */
    public $DevFileUpload;

    /**
     * @var string <p>数据源展示名，为了可视化查看</p>
     */
    public $DisplayName;

    /**
     * @var string <p>数据源描述信息</p>
     */
    public $Description;

    /**
     * @param integer $Id <p>数据源id</p>
     * @param string $ProjectId <p>项目id</p>
     * @param string $ProdConProperties <p>数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同</p><blockquote><p>deployType:<br>CONNSTR_PUBLICDB(公网实例)<br>CONNSTR_CVMDB(自建实例)<br>INSTANCE(云实例)</p></blockquote><p><pre><code>mysql: 自建实例{    &quot;deployType&quot;: &quot;CONNSTR_CVMDB&quot;,    &quot;url&quot;: &quot;jdbc:mysql://&lt;host&gt;:&lt;port&gt;/&lt;database&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;vpcId&quot;: &quot;&lt;vpcId&gt;&quot;,    &quot;type&quot;: &quot;MYSQL&quot;}mysql: 云实例{    &quot;instanceid&quot;: &quot;&lt;instanceId&gt;&quot;,    &quot;db&quot;: &quot;&lt;database&gt;&quot;,    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;deployType&quot;: &quot;INSTANCE&quot;,    &quot;type&quot;: &quot;TENCENT_MYSQL&quot;}sql_server:{    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;url&quot;: &quot;jdbc:sqlserver://&lt;host&gt;:&lt;port&gt;;DatabaseName=&lt;database&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;type&quot;: &quot;SQLSERVER&quot;}redis:    redisType:    -NO_ACCOUT(免账号)    -SELF_ACCOUNT(自定义账号){    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;ip&quot;: &quot;&lt;host&gt;&quot;,    &quot;port&quot;: &quot;&lt;port&gt;&quot;,    &quot;redisType&quot;: &quot;NO_ACCOUT&quot;,    &quot;type&quot;: &quot;REDIS&quot;}oracle:{    &quot;deployType&quot;: &quot;CONNSTR_CVMDB&quot;,    &quot;url&quot;: &quot;jdbc:oracle:thin:@&lt;host&gt;:&lt;port&gt;:&lt;sid&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;vpcId&quot;: &quot;&lt;vpcId&gt;&quot;,    &quot;type&quot;: &quot;ORACLE&quot;}mongodb:    advanceParams(自定义参数，会拼接至url后){    &quot;advanceParams&quot;: [        {            &quot;key&quot;: &quot;authSource&quot;,            &quot;value&quot;: &quot;admin&quot;        }    ],    &quot;db&quot;: &quot;&lt;database&gt;&quot;,    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;type&quot;: &quot;MONGODB&quot;,    &quot;host&quot;: &quot;&lt;host&gt;:&lt;port&gt;&quot;}postgresql:{    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;url&quot;: &quot;jdbc:postgresql://&lt;host&gt;:&lt;port&gt;/&lt;database&gt;&quot;,    &quot;username&quot;: &quot;&lt;username&gt;&quot;,    &quot;password&quot;: &quot;&lt;password&gt;&quot;,    &quot;type&quot;: &quot;POSTGRE&quot;}kafka:    authType:    - sasl    - jaas    - sasl_plaintext    - sasl_ssl    - GSSAPI    ssl:    -PLAIN    -GSSAPI{    &quot;deployType&quot;: &quot;CONNSTR_PUBLICDB&quot;,    &quot;host&quot;: &quot;&lt;host&gt;:&lt;port&gt;&quot;,    &quot;ssl&quot;: &quot;GSSAPI&quot;,    &quot;authType&quot;: &quot;sasl&quot;,    &quot;type&quot;: &quot;KAFKA&quot;,    &quot;principal&quot;: &quot;&lt;principal&gt;&quot;,    &quot;serviceName&quot;: &quot;kafka&quot;}cos:{    &quot;region&quot;: &quot;ap-shanghai&quot;,    &quot;deployType&quot;: &quot;INSTANCE&quot;,    &quot;secretId&quot;: &quot;&lt;secretId&gt;&quot;,    &quot;secretKey&quot;: &quot;&lt;secretKey&gt;&quot;,    &quot;bucket&quot;: &quot;&lt;bucket&gt;&quot;,    &quot;type&quot;: &quot;COS&quot;}</code></pre></p>
     * @param string $DevConProperties <p>若项目为标准模式，则此字段必填</p>
     * @param DataSourceFileUpload $ProdFileUpload <p>生产环境数据源文件上传</p>
     * @param DataSourceFileUpload $DevFileUpload <p>开发环境数据源文件上传</p>
     * @param string $DisplayName <p>数据源展示名，为了可视化查看</p>
     * @param string $Description <p>数据源描述信息</p>
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProdConProperties",$param) and $param["ProdConProperties"] !== null) {
            $this->ProdConProperties = $param["ProdConProperties"];
        }

        if (array_key_exists("DevConProperties",$param) and $param["DevConProperties"] !== null) {
            $this->DevConProperties = $param["DevConProperties"];
        }

        if (array_key_exists("ProdFileUpload",$param) and $param["ProdFileUpload"] !== null) {
            $this->ProdFileUpload = new DataSourceFileUpload();
            $this->ProdFileUpload->deserialize($param["ProdFileUpload"]);
        }

        if (array_key_exists("DevFileUpload",$param) and $param["DevFileUpload"] !== null) {
            $this->DevFileUpload = new DataSourceFileUpload();
            $this->DevFileUpload->deserialize($param["DevFileUpload"]);
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
